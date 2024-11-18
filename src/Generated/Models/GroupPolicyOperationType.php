<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Enum;

class GroupPolicyOperationType extends Enum {
    public const NONE = "none";
    public const UPLOAD = "upload";
    public const UPLOAD_NEW_VERSION = "uploadNewVersion";
    public const ADD_LANGUAGE_FILES = "addLanguageFiles";
    public const REMOVE_LANGUAGE_FILES = "removeLanguageFiles";
    public const UPDATE_LANGUAGE_FILES = "updateLanguageFiles";
    public const REMOVE = "remove";
}
