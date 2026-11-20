<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

/**
 * A directory object included in a Copilot policy setting assignment.
*/
class CopilotPolicySettingAssignmentMember implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopilotPolicySettingAssignmentMember and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPolicySettingAssignmentMember
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPolicySettingAssignmentMember {
        return new CopilotPolicySettingAssignmentMember();
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
     * Gets the directoryObjectId property value. Identifier of the assigned user or group.
     * @return string|null
    */
    public function getDirectoryObjectId(): ?string {
        $val = $this->getBackingStore()->get('directoryObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryObjectId'");
    }

    /**
     * Gets the directoryObjectType property value. The directory object type of a Copilot policy setting assignment member.
     * @return CopilotPolicySettingDirectoryObjectType|null
    */
    public function getDirectoryObjectType(): ?CopilotPolicySettingDirectoryObjectType {
        $val = $this->getBackingStore()->get('directoryObjectType');
        if (is_null($val) || $val instanceof CopilotPolicySettingDirectoryObjectType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'directoryObjectType'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'directoryObjectId' => fn(ParseNode $n) => $o->setDirectoryObjectId($n->getStringValue()),
            'directoryObjectType' => fn(ParseNode $n) => $o->setDirectoryObjectType($n->getEnumValue(CopilotPolicySettingDirectoryObjectType::class)),
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
        $writer->writeStringValue('directoryObjectId', $this->getDirectoryObjectId());
        $writer->writeEnumValue('directoryObjectType', $this->getDirectoryObjectType());
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
     * Sets the directoryObjectId property value. Identifier of the assigned user or group.
     * @param string|null $value Value to set for the directoryObjectId property.
    */
    public function setDirectoryObjectId(?string $value): void {
        $this->getBackingStore()->set('directoryObjectId', $value);
    }

    /**
     * Sets the directoryObjectType property value. The directory object type of a Copilot policy setting assignment member.
     * @param CopilotPolicySettingDirectoryObjectType|null $value Value to set for the directoryObjectType property.
    */
    public function setDirectoryObjectType(?CopilotPolicySettingDirectoryObjectType $value): void {
        $this->getBackingStore()->set('directoryObjectType', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
