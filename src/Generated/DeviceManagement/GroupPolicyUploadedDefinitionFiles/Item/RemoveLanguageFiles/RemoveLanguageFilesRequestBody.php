<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\RemoveLanguageFiles;

use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedLanguageFile;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RemoveLanguageFilesRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var array<GroupPolicyUploadedLanguageFile>|null $groupPolicyUploadedLanguageFiles The groupPolicyUploadedLanguageFiles property */
    private ?array $groupPolicyUploadedLanguageFiles = null;
    
    /**
     * Instantiates a new removeLanguageFilesRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveLanguageFilesRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RemoveLanguageFilesRequestBody {
        return new RemoveLanguageFilesRequestBody();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'groupPolicyUploadedLanguageFiles' => function (self $o, ParseNode $n) { $o->setGroupPolicyUploadedLanguageFiles($n->getCollectionOfObjectValues(GroupPolicyUploadedLanguageFile::class)); },
        ];
    }

    /**
     * Gets the groupPolicyUploadedLanguageFiles property value. The groupPolicyUploadedLanguageFiles property
     * @return array<GroupPolicyUploadedLanguageFile>|null
    */
    public function getGroupPolicyUploadedLanguageFiles(): ?array {
        return $this->groupPolicyUploadedLanguageFiles;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('groupPolicyUploadedLanguageFiles', $this->groupPolicyUploadedLanguageFiles);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the groupPolicyUploadedLanguageFiles property value. The groupPolicyUploadedLanguageFiles property
     *  @param array<GroupPolicyUploadedLanguageFile>|null $value Value to set for the groupPolicyUploadedLanguageFiles property.
    */
    public function setGroupPolicyUploadedLanguageFiles(?array $value ): void {
        $this->groupPolicyUploadedLanguageFiles = $value;
    }

}
