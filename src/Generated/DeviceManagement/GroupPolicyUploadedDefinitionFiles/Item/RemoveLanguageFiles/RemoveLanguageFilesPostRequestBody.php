<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\GroupPolicyUploadedDefinitionFiles\Item\RemoveLanguageFiles;

use Microsoft\Graph\Beta\Generated\Models\GroupPolicyUploadedLanguageFile;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

class RemoveLanguageFilesPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new RemoveLanguageFilesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RemoveLanguageFilesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RemoveLanguageFilesPostRequestBody {
        return new RemoveLanguageFilesPostRequestBody();
    }

    /**
     * Gets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>|null
    */
    public function getAdditionalData(): ?array {
        $val = $this->getBackingStore()->get('additionalData');
        if (is_null($val) || is_array($val)) {
            /** @var array<string, mixed>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalData'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'groupPolicyUploadedLanguageFiles' => fn(ParseNode $n) => $o->setGroupPolicyUploadedLanguageFiles($n->getCollectionOfObjectValues([GroupPolicyUploadedLanguageFile::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the groupPolicyUploadedLanguageFiles property value. The groupPolicyUploadedLanguageFiles property
     * @return array<GroupPolicyUploadedLanguageFile>|null
    */
    public function getGroupPolicyUploadedLanguageFiles(): ?array {
        $val = $this->getBackingStore()->get('groupPolicyUploadedLanguageFiles');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyUploadedLanguageFile::class);
            /** @var array<GroupPolicyUploadedLanguageFile>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'groupPolicyUploadedLanguageFiles'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('groupPolicyUploadedLanguageFiles', $this->getGroupPolicyUploadedLanguageFiles());
        $writer->writeAdditionalData($this->getAdditionalData());
    }

    /**
     * Sets the AdditionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the groupPolicyUploadedLanguageFiles property value. The groupPolicyUploadedLanguageFiles property
     * @param array<GroupPolicyUploadedLanguageFile>|null $value Value to set for the groupPolicyUploadedLanguageFiles property.
    */
    public function setGroupPolicyUploadedLanguageFiles(?array $value): void {
        $this->getBackingStore()->set('groupPolicyUploadedLanguageFiles', $value);
    }

}
