<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class AuthenticationEventType extends Enum {
    public const TOKEN_ISSUANCE_START = 'tokenIssuanceStart';
    public const PAGE_RENDER_START = 'pageRenderStart';
    public const UNKNOWN_FUTURE_VALUE = 'unknownFutureValue';
    public const ATTRIBUTE_COLLECTION_START = 'attributeCollectionStart';
    public const ATTRIBUTE_COLLECTION_SUBMIT = 'attributeCollectionSubmit';
    public const EMAIL_OTP_SEND = 'emailOtpSend';
}
