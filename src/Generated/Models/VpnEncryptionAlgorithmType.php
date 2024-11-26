<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class VpnEncryptionAlgorithmType extends Enum {
    public const AES256 = "aes256";
    public const DES = "des";
    public const TRIPLE_DES = "tripleDes";
    public const AES128 = "aes128";
    public const AES128_GCM = "aes128Gcm";
    public const AES256_GCM = "aes256Gcm";
    public const AES192 = "aes192";
    public const AES192_GCM = "aes192Gcm";
    public const CHA_CHA20_POLY1305 = "chaCha20Poly1305";
}
