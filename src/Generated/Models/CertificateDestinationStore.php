<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class CertificateDestinationStore extends Enum {
    public const COMPUTER_CERT_STORE_ROOT = "computerCertStoreRoot";
    public const COMPUTER_CERT_STORE_INTERMEDIATE = "computerCertStoreIntermediate";
    public const USER_CERT_STORE_INTERMEDIATE = "userCertStoreIntermediate";
}
