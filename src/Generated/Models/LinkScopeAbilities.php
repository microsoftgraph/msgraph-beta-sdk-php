<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class LinkScopeAbilities implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new LinkScopeAbilities and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return LinkScopeAbilities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): LinkScopeAbilities {
        return new LinkScopeAbilities();
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
     * Gets the blockDownloadLinkAbilities property value. The blockDownload link abilities.
     * @return LinkRoleAbilities|null
    */
    public function getBlockDownloadLinkAbilities(): ?LinkRoleAbilities {
        $val = $this->getBackingStore()->get('blockDownloadLinkAbilities');
        if (is_null($val) || $val instanceof LinkRoleAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'blockDownloadLinkAbilities'");
    }

    /**
     * Gets the editLinkAbilities property value. The editLinkAbilities property
     * @return LinkRoleAbilities|null
    */
    public function getEditLinkAbilities(): ?LinkRoleAbilities {
        $val = $this->getBackingStore()->get('editLinkAbilities');
        if (is_null($val) || $val instanceof LinkRoleAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'editLinkAbilities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockDownloadLinkAbilities' => fn(ParseNode $n) => $o->setBlockDownloadLinkAbilities($n->getObjectValue([LinkRoleAbilities::class, 'createFromDiscriminatorValue'])),
            'editLinkAbilities' => fn(ParseNode $n) => $o->setEditLinkAbilities($n->getObjectValue([LinkRoleAbilities::class, 'createFromDiscriminatorValue'])),
            'manageListLinkAbilities' => fn(ParseNode $n) => $o->setManageListLinkAbilities($n->getObjectValue([LinkRoleAbilities::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'readLinkAbilities' => fn(ParseNode $n) => $o->setReadLinkAbilities($n->getObjectValue([LinkRoleAbilities::class, 'createFromDiscriminatorValue'])),
            'reviewLinkAbilities' => fn(ParseNode $n) => $o->setReviewLinkAbilities($n->getObjectValue([LinkRoleAbilities::class, 'createFromDiscriminatorValue'])),
            'submitOnlyLinkAbilities' => fn(ParseNode $n) => $o->setSubmitOnlyLinkAbilities($n->getObjectValue([LinkRoleAbilities::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the manageListLinkAbilities property value. The manageList link abilities.
     * @return LinkRoleAbilities|null
    */
    public function getManageListLinkAbilities(): ?LinkRoleAbilities {
        $val = $this->getBackingStore()->get('manageListLinkAbilities');
        if (is_null($val) || $val instanceof LinkRoleAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'manageListLinkAbilities'");
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        $val = $this->getBackingStore()->get('odataType');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'odataType'");
    }

    /**
     * Gets the readLinkAbilities property value. The readLinkAbilities property
     * @return LinkRoleAbilities|null
    */
    public function getReadLinkAbilities(): ?LinkRoleAbilities {
        $val = $this->getBackingStore()->get('readLinkAbilities');
        if (is_null($val) || $val instanceof LinkRoleAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'readLinkAbilities'");
    }

    /**
     * Gets the reviewLinkAbilities property value. The review link abilities.
     * @return LinkRoleAbilities|null
    */
    public function getReviewLinkAbilities(): ?LinkRoleAbilities {
        $val = $this->getBackingStore()->get('reviewLinkAbilities');
        if (is_null($val) || $val instanceof LinkRoleAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'reviewLinkAbilities'");
    }

    /**
     * Gets the submitOnlyLinkAbilities property value. The submitOnly link abilities.
     * @return LinkRoleAbilities|null
    */
    public function getSubmitOnlyLinkAbilities(): ?LinkRoleAbilities {
        $val = $this->getBackingStore()->get('submitOnlyLinkAbilities');
        if (is_null($val) || $val instanceof LinkRoleAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'submitOnlyLinkAbilities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('blockDownloadLinkAbilities', $this->getBlockDownloadLinkAbilities());
        $writer->writeObjectValue('editLinkAbilities', $this->getEditLinkAbilities());
        $writer->writeObjectValue('manageListLinkAbilities', $this->getManageListLinkAbilities());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('readLinkAbilities', $this->getReadLinkAbilities());
        $writer->writeObjectValue('reviewLinkAbilities', $this->getReviewLinkAbilities());
        $writer->writeObjectValue('submitOnlyLinkAbilities', $this->getSubmitOnlyLinkAbilities());
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
     * Sets the blockDownloadLinkAbilities property value. The blockDownload link abilities.
     * @param LinkRoleAbilities|null $value Value to set for the blockDownloadLinkAbilities property.
    */
    public function setBlockDownloadLinkAbilities(?LinkRoleAbilities $value): void {
        $this->getBackingStore()->set('blockDownloadLinkAbilities', $value);
    }

    /**
     * Sets the editLinkAbilities property value. The editLinkAbilities property
     * @param LinkRoleAbilities|null $value Value to set for the editLinkAbilities property.
    */
    public function setEditLinkAbilities(?LinkRoleAbilities $value): void {
        $this->getBackingStore()->set('editLinkAbilities', $value);
    }

    /**
     * Sets the manageListLinkAbilities property value. The manageList link abilities.
     * @param LinkRoleAbilities|null $value Value to set for the manageListLinkAbilities property.
    */
    public function setManageListLinkAbilities(?LinkRoleAbilities $value): void {
        $this->getBackingStore()->set('manageListLinkAbilities', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the readLinkAbilities property value. The readLinkAbilities property
     * @param LinkRoleAbilities|null $value Value to set for the readLinkAbilities property.
    */
    public function setReadLinkAbilities(?LinkRoleAbilities $value): void {
        $this->getBackingStore()->set('readLinkAbilities', $value);
    }

    /**
     * Sets the reviewLinkAbilities property value. The review link abilities.
     * @param LinkRoleAbilities|null $value Value to set for the reviewLinkAbilities property.
    */
    public function setReviewLinkAbilities(?LinkRoleAbilities $value): void {
        $this->getBackingStore()->set('reviewLinkAbilities', $value);
    }

    /**
     * Sets the submitOnlyLinkAbilities property value. The submitOnly link abilities.
     * @param LinkRoleAbilities|null $value Value to set for the submitOnlyLinkAbilities property.
    */
    public function setSubmitOnlyLinkAbilities(?LinkRoleAbilities $value): void {
        $this->getBackingStore()->set('submitOnlyLinkAbilities', $value);
    }

}
