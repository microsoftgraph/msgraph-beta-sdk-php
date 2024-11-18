<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class LanManagerAuthenticationLevel extends Enum {
    public const LM_AND_NLTM = "lmAndNltm";
    public const LM_NTLM_AND_NTLM_V2 = "lmNtlmAndNtlmV2";
    public const LM_AND_NTLM_ONLY = "lmAndNtlmOnly";
    public const LM_AND_NTLM_V2 = "lmAndNtlmV2";
    public const LM_NTLM_V2_AND_NOT_LM = "lmNtlmV2AndNotLm";
    public const LM_NTLM_V2_AND_NOT_LM_OR_NTM = "lmNtlmV2AndNotLmOrNtm";
}
