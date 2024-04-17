<?php

namespace Microsoft\Graph\Beta\Generated\Models\IndustryData;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

class SecurityGroupCreationOptions implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new SecurityGroupCreationOptions and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityGroupCreationOptions
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityGroupCreationOptions {
        return new SecurityGroupCreationOptions();
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
     * Gets the createBasedOnOrgPlusRoleGroup property value. Indicates whether the security group should be created based on the org and role group.
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
     * Gets the createBasedOnRoleGroup property value. A boolean choice indicating whether the security group should be created based on the role group
     * @return bool|null
    */
    public function getCreateBasedOnRoleGroup(): ?bool {
        $val = $this->getBackingStore()->get('createBasedOnRoleGroup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createBasedOnRoleGroup'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'createBasedOnOrgPlusRoleGroup' => fn(ParseNode $n) => $o->setCreateBasedOnOrgPlusRoleGroup($n->getBooleanValue()),
            'createBasedOnRoleGroup' => fn(ParseNode $n) => $o->setCreateBasedOnRoleGroup($n->getBooleanValue()),
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
        $writer->writeBooleanValue('createBasedOnOrgPlusRoleGroup', $this->getCreateBasedOnOrgPlusRoleGroup());
        $writer->writeBooleanValue('createBasedOnRoleGroup', $this->getCreateBasedOnRoleGroup());
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
     * Sets the createBasedOnOrgPlusRoleGroup property value. Indicates whether the security group should be created based on the org and role group.
     * @param bool|null $value Value to set for the createBasedOnOrgPlusRoleGroup property.
    */
    public function setCreateBasedOnOrgPlusRoleGroup(?bool $value): void {
        $this->getBackingStore()->set('createBasedOnOrgPlusRoleGroup', $value);
    }

    /**
     * Sets the createBasedOnRoleGroup property value. A boolean choice indicating whether the security group should be created based on the role group
     * @param bool|null $value Value to set for the createBasedOnRoleGroup property.
    */
    public function setCreateBasedOnRoleGroup(?bool $value): void {
        $this->getBackingStore()->set('createBasedOnRoleGroup', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
