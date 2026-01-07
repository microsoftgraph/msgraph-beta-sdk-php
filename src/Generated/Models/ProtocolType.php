<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class ProtocolType extends Enum {
    public const NONE = "none";
    public const O_AUTH2 = "oAuth2";
    public const ROPC = "ropc";
    public const WS_FEDERATION = "wsFederation";
    public const SAML20 = "saml20";
    public const DEVICE_CODE = "deviceCode";
    public const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
    public const AUTHENTICATION_TRANSFER = "authenticationTransfer";
    public const NATIVE_AUTH = "nativeAuth";
    public const IMPLICIT_ACCESS_TOKEN_AND_GET_RESPONSE_MODE = "implicitAccessTokenAndGetResponseMode";
    public const IMPLICIT_ID_TOKEN_AND_GET_RESPONSE_MODE = "implicitIdTokenAndGetResponseMode";
    public const IMPLICIT_ACCESS_TOKEN_AND_POST_RESPONSE_MODE = "implicitAccessTokenAndPostResponseMode";
    public const IMPLICIT_ID_TOKEN_AND_POST_RESPONSE_MODE = "implicitIdTokenAndPostResponseMode";
    public const AUTHORIZATION_CODE_WITHOUT_PKCE = "authorizationCodeWithoutPkce";
    public const AUTHORIZATION_CODE_WITH_PKCE = "authorizationCodeWithPkce";
    public const CLIENT_CREDENTIALS = "clientCredentials";
    public const REFRESH_TOKEN_GRANT = "refreshTokenGrant";
    public const ENCRYPTED_AUTHORIZE_RESPONSE = "encryptedAuthorizeResponse";
    public const DIRECT_USER_GRANT = "directUserGrant";
    public const KERBEROS = "kerberos";
    public const PRT_GRANT = "prtGrant";
    public const SEAMLESS_SSO = "seamlessSso";
    public const PRT_BROKER_BASED = "prtBrokerBased";
    public const PRT_NON_BROKER_BASED = "prtNonBrokerBased";
    public const ON_BEHALF_OF = "onBehalfOf";
    public const SAML_ON_BEHALF_OF = "samlOnBehalfOf";
    public const OFFICE_S2_S = "officeS2S";
    public const WS_TRUST = "wsTrust";
}
