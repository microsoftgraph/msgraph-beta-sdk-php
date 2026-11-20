<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The users and groups selected by a Copilot policy setting.
*/
class CopilotPolicySettingUserAssignment implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new CopilotPolicySettingUserAssignment and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotPolicySettingUserAssignment
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotPolicySettingUserAssignment {
        return new CopilotPolicySettingUserAssignment();
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
            'members' => fn(ParseNode $n) => $o->setMembers($n->getCollectionOfObjectValues([CopilotPolicySettingAssignmentMember::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'userAssignmentCategory' => fn(ParseNode $n) => $o->setUserAssignmentCategory($n->getEnumValue(CopilotPolicySettingUserAssignmentCategory::class)),
        ];
    }

    /**
     * Gets the members property value. Users and groups explicitly included in the assignment.
     * @return array<CopilotPolicySettingAssignmentMember>|null
    */
    public function getMembers(): ?array {
        $val = $this->getBackingStore()->get('members');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CopilotPolicySettingAssignmentMember::class);
            /** @var array<CopilotPolicySettingAssignmentMember>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'members'");
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
     * Gets the userAssignmentCategory property value. The category that determines which users are assigned by a Copilot policy setting.
     * @return CopilotPolicySettingUserAssignmentCategory|null
    */
    public function getUserAssignmentCategory(): ?CopilotPolicySettingUserAssignmentCategory {
        $val = $this->getBackingStore()->get('userAssignmentCategory');
        if (is_null($val) || $val instanceof CopilotPolicySettingUserAssignmentCategory) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'userAssignmentCategory'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfObjectValues('members', $this->getMembers());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeEnumValue('userAssignmentCategory', $this->getUserAssignmentCategory());
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
     * Sets the members property value. Users and groups explicitly included in the assignment.
     * @param array<CopilotPolicySettingAssignmentMember>|null $value Value to set for the members property.
    */
    public function setMembers(?array $value): void {
        $this->getBackingStore()->set('members', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the userAssignmentCategory property value. The category that determines which users are assigned by a Copilot policy setting.
     * @param CopilotPolicySettingUserAssignmentCategory|null $value Value to set for the userAssignmentCategory property.
    */
    public function setUserAssignmentCategory(?CopilotPolicySettingUserAssignmentCategory $value): void {
        $this->getBackingStore()->set('userAssignmentCategory', $value);
    }

}
