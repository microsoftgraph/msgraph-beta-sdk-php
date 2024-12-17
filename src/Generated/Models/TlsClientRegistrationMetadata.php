<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class TlsClientRegistrationMetadata extends Enum {
    public const TLS_CLIENT_AUTH_SUBJECT_DN = "tls_client_auth_subject_dn";
    public const TLS_CLIENT_AUTH_SAN_DNS = "tls_client_auth_san_dns";
    public const TLS_CLIENT_AUTH_SAN_URI = "tls_client_auth_san_uri";
    public const TLS_CLIENT_AUTH_SAN_IP = "tls_client_auth_san_ip";
    public const TLS_CLIENT_AUTH_SAN_EMAIL = "tls_client_auth_san_email";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}
