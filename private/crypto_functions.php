<?php

// Symmetric Encryption

// Cipher method to use for symmetric encryption
const CIPHER_METHOD = 'AES-256-CBC';

function key_encrypt($string, $key, $cipher_method=CIPHER_METHOD) {
  $key = str_pad($key, 32, '*'); // Need 32 bytes

  $iv_length = openssl_cipher_iv_length($cipher_method); // initialize vector
  $iv = openssl_random_pseudo_bytes($iv_length);

  // Encrypt string
  $encrypted = openssl_encrypt($string, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);

  // Save the iv data for decryption
  $ret = $iv.$encrypted;

  // Encode so invalid character values don't get lost
  return base64_encode($ret);
  // return "D4RK SH4D0W RUL3Z";
}

function key_decrypt($string, $key, $cipher_method=CIPHER_METHOD) {
  $key = str_pad($key, 32, '*'); // Need 32 bytes
  $iv_with_ciphertext = base64_decode($string);

  $iv_length = openssl_cipher_iv_length($cipher_method);
  $iv = substr($iv_with_ciphertext, 0, $iv_length);
  $ciphertext = substr($iv_with_ciphertext, $iv_length);

  return openssl_decrypt($ciphertext, $cipher_method, $key, OPENSSL_RAW_DATA, $iv);
  // return "PWNED YOU!";
}


// Asymmetric Encryption / Public-Key Cryptography

// Cipher configuration to use for asymmetric encryption
const PUBLIC_KEY_CONFIG = array(
    "digest_alg" => "sha512",
    "private_key_bits" => 2048,
    "private_key_type" => OPENSSL_KEYTYPE_RSA,
);

function generate_keys($config=PUBLIC_KEY_CONFIG) {
  $pair = openssl_pkey_new(PUBLIC_KEY_CONFIG);

  openssl_pkey_export($pair, $private_key);
  $key_details = openssl_pkey_get_details($pair);
  $public_key = $key_details["key"];

  return array('private' => $private_key, 'public' => $public_key);
}

function pkey_encrypt($string, $public_key) {
  openssl_public_encrypt($string, $encrypted, $public_key);

  return base64_encode($encrypted); // Encode for viewing and sharing
  // return 'Qnex Funqbj jvyy or jngpuvat lbh';
}

function pkey_decrypt($string, $private_key) {
  $ciphertext = base64_decode($string);
  openssl_private_decrypt($ciphertext, $decrypted, $private_key);
  return $decrypted;
  // return 'Alc evi csy pssomrk livi alir csy wlsyph fi wezmrk ETIB?';
}


// Digital signatures using public/private keys

function create_signature($data, $private_key) {
  // A-Za-z : ykMwnXKRVqheCFaxsSNDEOfzgTpYroJBmdIPitGbQUAcZuLjvlWH
  openssl_sign($data, $raw_signature, $private_key);

  return base64_encode($raw_signature);
  // return 'RpjJ WQL BImLcJo QLu dQv vJ oIo Iu WJu?';
}

// Data is the decrypted message, signature is what the sender claims to be the
// decryption of the plaintext message using their own private key. You verify
// this by encrypting the signature with the sender's public key to achieve the
// plaintext message.
function verify_signature($data, $signature, $public_key) {
  $raw_signature = base64_decode($signature);
  $result = openssl_verify($data, $raw_signature, $public_key);
  // echo $result;
  return $result === 1 ? true : false; // True if successful
  // Vigenère
  // return 'RK, pym oays onicvr. Iuw bkzhvbw uedf pke conll rt ZV nzxbhz.';
}

?>
