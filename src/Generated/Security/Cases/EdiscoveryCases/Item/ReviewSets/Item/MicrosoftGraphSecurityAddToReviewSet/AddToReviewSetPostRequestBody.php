<?php

namespace Microsoft\Graph\Beta\Generated\Security\Cases\EdiscoveryCases\Item\ReviewSets\Item\MicrosoftGraphSecurityAddToReviewSet;

use Microsoft\Graph\Beta\Generated\Models\Security\AdditionalDataOptions;
use Microsoft\Graph\Beta\Generated\Models\Security\CloudAttachmentVersion;
use Microsoft\Graph\Beta\Generated\Models\Security\DocumentVersion;
use Microsoft\Graph\Beta\Generated\Models\Security\EdiscoverySearch;
use Microsoft\Graph\Beta\Generated\Models\Security\ItemsToInclude;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AddToReviewSetPostRequestBody implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AddToReviewSetPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AddToReviewSetPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AddToReviewSetPostRequestBody {
        return new AddToReviewSetPostRequestBody();
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
     * Gets the additionalDataOptions property value. The additionalDataOptions property
     * @return AdditionalDataOptions|null
    */
    public function getAdditionalDataOptions(): ?AdditionalDataOptions {
        $val = $this->getBackingStore()->get('additionalDataOptions');
        if (is_null($val) || $val instanceof AdditionalDataOptions) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'additionalDataOptions'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the cloudAttachmentVersion property value. The cloudAttachmentVersion property
     * @return CloudAttachmentVersion|null
    */
    public function getCloudAttachmentVersion(): ?CloudAttachmentVersion {
        $val = $this->getBackingStore()->get('cloudAttachmentVersion');
        if (is_null($val) || $val instanceof CloudAttachmentVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cloudAttachmentVersion'");
    }

    /**
     * Gets the documentVersion property value. The documentVersion property
     * @return DocumentVersion|null
    */
    public function getDocumentVersion(): ?DocumentVersion {
        $val = $this->getBackingStore()->get('documentVersion');
        if (is_null($val) || $val instanceof DocumentVersion) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'documentVersion'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'additionalDataOptions' => fn(ParseNode $n) => $o->setAdditionalDataOptions($n->getEnumValue(AdditionalDataOptions::class)),
            'cloudAttachmentVersion' => fn(ParseNode $n) => $o->setCloudAttachmentVersion($n->getEnumValue(CloudAttachmentVersion::class)),
            'documentVersion' => fn(ParseNode $n) => $o->setDocumentVersion($n->getEnumValue(DocumentVersion::class)),
            'itemsToInclude' => fn(ParseNode $n) => $o->setItemsToInclude($n->getEnumValue(ItemsToInclude::class)),
            'search' => fn(ParseNode $n) => $o->setSearch($n->getObjectValue([EdiscoverySearch::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the itemsToInclude property value. The itemsToInclude property
     * @return ItemsToInclude|null
    */
    public function getItemsToInclude(): ?ItemsToInclude {
        $val = $this->getBackingStore()->get('itemsToInclude');
        if (is_null($val) || $val instanceof ItemsToInclude) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'itemsToInclude'");
    }

    /**
     * Gets the search property value. The search property
     * @return EdiscoverySearch|null
    */
    public function getSearch(): ?EdiscoverySearch {
        $val = $this->getBackingStore()->get('search');
        if (is_null($val) || $val instanceof EdiscoverySearch) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'search'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('additionalDataOptions', $this->getAdditionalDataOptions());
        $writer->writeEnumValue('cloudAttachmentVersion', $this->getCloudAttachmentVersion());
        $writer->writeEnumValue('documentVersion', $this->getDocumentVersion());
        $writer->writeEnumValue('itemsToInclude', $this->getItemsToInclude());
        $writer->writeObjectValue('search', $this->getSearch());
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
     * Sets the additionalDataOptions property value. The additionalDataOptions property
     * @param AdditionalDataOptions|null $value Value to set for the additionalDataOptions property.
    */
    public function setAdditionalDataOptions(?AdditionalDataOptions $value): void {
        $this->getBackingStore()->set('additionalDataOptions', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the cloudAttachmentVersion property value. The cloudAttachmentVersion property
     * @param CloudAttachmentVersion|null $value Value to set for the cloudAttachmentVersion property.
    */
    public function setCloudAttachmentVersion(?CloudAttachmentVersion $value): void {
        $this->getBackingStore()->set('cloudAttachmentVersion', $value);
    }

    /**
     * Sets the documentVersion property value. The documentVersion property
     * @param DocumentVersion|null $value Value to set for the documentVersion property.
    */
    public function setDocumentVersion(?DocumentVersion $value): void {
        $this->getBackingStore()->set('documentVersion', $value);
    }

    /**
     * Sets the itemsToInclude property value. The itemsToInclude property
     * @param ItemsToInclude|null $value Value to set for the itemsToInclude property.
    */
    public function setItemsToInclude(?ItemsToInclude $value): void {
        $this->getBackingStore()->set('itemsToInclude', $value);
    }

    /**
     * Sets the search property value. The search property
     * @param EdiscoverySearch|null $value Value to set for the search property.
    */
    public function setSearch(?EdiscoverySearch $value): void {
        $this->getBackingStore()->set('search', $value);
    }

}
