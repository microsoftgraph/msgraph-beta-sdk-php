<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SharePointSharingAbilities implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SharePointSharingAbilities and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointSharingAbilities
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointSharingAbilities {
        return new SharePointSharingAbilities();
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
     * Gets the anyoneLinkAbilities property value. The anyone link abilities.
     * @return LinkScopeAbilities|null
    */
    public function getAnyoneLinkAbilities(): ?LinkScopeAbilities {
        $val = $this->getBackingStore()->get('anyoneLinkAbilities');
        if (is_null($val) || $val instanceof LinkScopeAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anyoneLinkAbilities'");
    }

    /**
     * Gets the BackingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * Gets the directSharingAbilities property value. The direct sharing abilities.
     * @return DirectSharingAbilities|null
    */
    public function getDirectSharingAbilities(): ?DirectSharingAbilities {
        $val = $this->getBackingStore()->get('directSharingAbilities');
        if (is_null($val) || $val instanceof DirectSharingAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directSharingAbilities'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'anyoneLinkAbilities' => fn(ParseNode $n) => $o->setAnyoneLinkAbilities($n->getObjectValue([LinkScopeAbilities::class, 'createFromDiscriminatorValue'])),
            'directSharingAbilities' => fn(ParseNode $n) => $o->setDirectSharingAbilities($n->getObjectValue([DirectSharingAbilities::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'organizationLinkAbilities' => fn(ParseNode $n) => $o->setOrganizationLinkAbilities($n->getObjectValue([LinkScopeAbilities::class, 'createFromDiscriminatorValue'])),
            'specificPeopleLinkAbilities' => fn(ParseNode $n) => $o->setSpecificPeopleLinkAbilities($n->getObjectValue([LinkScopeAbilities::class, 'createFromDiscriminatorValue'])),
        ];
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
     * Gets the organizationLinkAbilities property value. The organization link abilities.
     * @return LinkScopeAbilities|null
    */
    public function getOrganizationLinkAbilities(): ?LinkScopeAbilities {
        $val = $this->getBackingStore()->get('organizationLinkAbilities');
        if (is_null($val) || $val instanceof LinkScopeAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'organizationLinkAbilities'");
    }

    /**
     * Gets the specificPeopleLinkAbilities property value. The specificPeople link abilities.
     * @return LinkScopeAbilities|null
    */
    public function getSpecificPeopleLinkAbilities(): ?LinkScopeAbilities {
        $val = $this->getBackingStore()->get('specificPeopleLinkAbilities');
        if (is_null($val) || $val instanceof LinkScopeAbilities) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'specificPeopleLinkAbilities'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeObjectValue('anyoneLinkAbilities', $this->getAnyoneLinkAbilities());
        $writer->writeObjectValue('directSharingAbilities', $this->getDirectSharingAbilities());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('organizationLinkAbilities', $this->getOrganizationLinkAbilities());
        $writer->writeObjectValue('specificPeopleLinkAbilities', $this->getSpecificPeopleLinkAbilities());
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
     * Sets the anyoneLinkAbilities property value. The anyone link abilities.
     * @param LinkScopeAbilities|null $value Value to set for the anyoneLinkAbilities property.
    */
    public function setAnyoneLinkAbilities(?LinkScopeAbilities $value): void {
        $this->getBackingStore()->set('anyoneLinkAbilities', $value);
    }

    /**
     * Sets the BackingStore property value. Stores model information.
     * @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the directSharingAbilities property value. The direct sharing abilities.
     * @param DirectSharingAbilities|null $value Value to set for the directSharingAbilities property.
    */
    public function setDirectSharingAbilities(?DirectSharingAbilities $value): void {
        $this->getBackingStore()->set('directSharingAbilities', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the organizationLinkAbilities property value. The organization link abilities.
     * @param LinkScopeAbilities|null $value Value to set for the organizationLinkAbilities property.
    */
    public function setOrganizationLinkAbilities(?LinkScopeAbilities $value): void {
        $this->getBackingStore()->set('organizationLinkAbilities', $value);
    }

    /**
     * Sets the specificPeopleLinkAbilities property value. The specificPeople link abilities.
     * @param LinkScopeAbilities|null $value Value to set for the specificPeopleLinkAbilities property.
    */
    public function setSpecificPeopleLinkAbilities(?LinkScopeAbilities $value): void {
        $this->getBackingStore()->set('specificPeopleLinkAbilities', $value);
    }

}
