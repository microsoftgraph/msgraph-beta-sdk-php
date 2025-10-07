<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class AdminUnitCreationOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new AdminUnitCreationOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminUnitCreationOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminUnitCreationOptions {
        return new AdminUnitCreationOptions();
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
     * Gets the createBasedOnOrg property value. Indicates whether the administrative unit should be created based on the org.
     * @return bool|null
    */
    public function getCreateBasedOnOrg(): ?bool {
        $val = $this->getBackingStore()->get('createBasedOnOrg');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createBasedOnOrg'");
    }

    /**
     * Gets the createBasedOnOrgPlusRoleGroup property value. Indicates whether the administrative unit should be created based on the org and role group.
     * @return bool|null
    */
    public function getCreateBasedOnOrgPlusRoleGroup(): ?bool {
        $val = $this->getBackingStore()->get('createBasedOnOrgPlusRoleGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createBasedOnOrgPlusRoleGroup'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createBasedOnOrg' => fn(ParseNode $n) => $o->setCreateBasedOnOrg($n->getBooleanValue()),
            'createBasedOnOrgPlusRoleGroup' => fn(ParseNode $n) => $o->setCreateBasedOnOrgPlusRoleGroup($n->getBooleanValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
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
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('createBasedOnOrg', $this->getCreateBasedOnOrg());
        $writer->writeBooleanValue('createBasedOnOrgPlusRoleGroup', $this->getCreateBasedOnOrgPlusRoleGroup());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
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
     * Sets the createBasedOnOrg property value. Indicates whether the administrative unit should be created based on the org.
     * @param bool|null $value Value to set for the createBasedOnOrg property.
    */
    public function setCreateBasedOnOrg(?bool $value): void {
        $this->getBackingStore()->set('createBasedOnOrg', $value);
    }

    /**
     * Sets the createBasedOnOrgPlusRoleGroup property value. Indicates whether the administrative unit should be created based on the org and role group.
     * @param bool|null $value Value to set for the createBasedOnOrgPlusRoleGroup property.
    */
    public function setCreateBasedOnOrgPlusRoleGroup(?bool $value): void {
        $this->getBackingStore()->set('createBasedOnOrgPlusRoleGroup', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
