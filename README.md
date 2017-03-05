# Project 5 - Encryption

Time spent: **X** hours spent in total

## User Stories

The following **required** functionality is completed:

1\. Symmetric Encrypt/Decrypt
  * [x]  Required: Repair the symmetric encrypt and decrypt code

2\. Encrypted Message 1
  * [ ]  Required: Decrypt the government message
  * [ ]  Required: Encrypt a response and include in this README

3\. Generate Public-Private Keys
  * [x]  Required: Repair the key generator code
  * [x]  Required: Generate keys for "johnsteed" and add him to the Agent Directory

4\. Asymmetric Encrypt/Decrypt
  * [x]  Required: Repair the asymmetric encrypt and decrypt code

5\. Create/Verify Signature
  * [x]  Required: Repair the create and verify signature code

6\. Encrypted Message 2
  * [x]  Required: Decrypt the message
  * [x]  Required: Verify the message (FAILED)
  * [x]  Required: Include a response message in this README
  RESPONSE:
  From: agent99
  To: sydneybristow
  Body:
  1Dto3ILU9doFDeqEMIsa1fOPHuPivLcYoL5tpDEayPeJJQK4IR/1FJz0mjq7hF60ffxvJFGLMOxecG08hgqSY8Jcssih/XfUprdWZYj+DVpxe+ma8QvBbDRATboKLI3V/ys7/Gr0LnHggk7Xhn1cXwmxfTkB9PVkgfWFM4um+Jz4N/ltQTvaC0qoXQrCOPc2EdQOC8rXn3FUzxYKE9VNwTvQE1iyN1FGPFdHVM71gQSc3QJyrHyyy1BTpSYy/jeD9giIuNO5xkEnw42/qI9iZ7iHetcVmJs88dT7uchZcHiZ6tCFJM8dtot48fIrRRTg0YE87pqXE9/4sf4Fq2h7lQ==
  Signature:
  lft+EzBsCXm8oqd7tGlN6bAKTa8EZGUbjoedxiYypc12Q4d895hS/ei9MT5EU34krUvbyo++/bCfNdtYslHUzu+2D7hh/6AWDnCCI17W8mNXIdN+nyaUH9Zkx3pneYVEPO5+F14esl9iRX4ofmh0aRQagbkaR85M+GyFjl3zjtttzC7YNbasMx00NiigugSeRwSO1FaRdK5p28KS5F/69OQGpHn2S3szjZj2TxhuLdt1tiaiI9gEuxlNWfIIzX/cZXiEdEvOZf+i2IUuo7xt3MZMoWkbIWtSiNDHep8MVswoB+tAmXohYLh/8kZcLIP6P2XjCY3yawz48pJUIcXsTA==

7\. Agent Messages
  * [ ]  Required: Repair the dropbox code
  * [ ]  Required: Repair the messages area
  * [ ]  Required: Display encrypted messages for all agents
  * [ ]  Required: Messages indicate whether the message signature is valid
  * [ ]  Required: Your messages are automatically decrypted

8\. Identify the Double Agent
  * [ ]  Required: Decrypt as many email messages as possible
  * [ ]  Required: Identify the double agent: ____________________

The following objectives are **optional**:

* Bonus Objective 1\.
  * [x]  Track down the bugs in the code and fix them.

* Bonus Objective 2\.
  * [ ]  Write a report of your discoveries (longer than 300 characters).
  * [ ]  Compose a secure email for sending over an insecure network.
  * [ ]  Include the email with your encrypted report in this README.

* Bonus Objective 3\.
  * [ ]  Add a "Create/Verify Checksum" section to the Encryption Tools area.

* Advanced Objective 1\.
  * [ ]  Add support for other symmetric algorithms.

## Video Walkthrough

Here's a walkthrough of implemented user stories:

<img src='http://i.imgur.com/link/to/your/gif/file.gif' title='Video Walkthrough' width='' alt='Video Walkthrough' />

GIF created with [LiceCap](http://www.cockos.com/licecap/).

## Notes

Describe any challenges encountered while building the app.

- Although my symmetric encryption page seemed to be functioning correctly for any
  input I gave it, it failed to decrypt the message from task 2 (returned empty string).

## License

    Copyright [2017] [William Brooks Van Buren]

    Licensed under the Apache License, Version 2.0 (the "License");
    you may not use this file except in compliance with the License.
    You may obtain a copy of the License at

        http://www.apache.org/licenses/LICENSE-2.0

    Unless required by applicable law or agreed to in writing, software
    distributed under the License is distributed on an "AS IS" BASIS,
    WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
    See the License for the specific language governing permissions and
    limitations under the License.
