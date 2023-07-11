<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The definition value entity stores the value for a single group policy definition.
*/
class GroupPolicyDefinitionValue extends Entity implements Parsable 
{
    /**
     * Instantiates a new groupPolicyDefinitionValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyDefinitionValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyDefinitionValue {
        return new GroupPolicyDefinitionValue();
    }

    /**
     * Gets the configurationType property value. Group Policy Configuration Type
     * @return GroupPolicyConfigurationType|null
    */
    public function getConfigurationType(): ?GroupPolicyConfigurationType {
        $val = $this->getBackingStore()->get('configurationType');
        if (is_null($val) || $val instanceof GroupPolicyConfigurationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'configurationType'");
    }

    /**
     * Gets the createdDateTime property value. The date and time the object was created.
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('createdDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'createdDateTime'");
    }

    /**
     * Gets the definition property value. The associated group policy definition with the value.
     * @return GroupPolicyDefinition|null
    */
    public function getDefinition(): ?GroupPolicyDefinition {
        $val = $this->getBackingStore()->get('definition');
        if (is_null($val) || $val instanceof GroupPolicyDefinition) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definition'");
    }

    /**
     * Gets the enabled property value. Enables or disables the associated group policy definition.
     * @return bool|null
    */
    public function getEnabled(): ?bool {
        $val = $this->getBackingStore()->get('enabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'enabled'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'configurationType' => fn(ParseNode $n) => $o->setConfigurationType($n->getEnumValue(GroupPolicyConfigurationType::class)),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'definition' => fn(ParseNode $n) => $o->setDefinition($n->getObjectValue([GroupPolicyDefinition::class, 'createFromDiscriminatorValue'])),
            'enabled' => fn(ParseNode $n) => $o->setEnabled($n->getBooleanValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'presentationValues' => fn(ParseNode $n) => $o->setPresentationValues($n->getCollectionOfObjectValues([GroupPolicyPresentationValue::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        $val = $this->getBackingStore()->get('lastModifiedDateTime');
        if (is_null($val) || $val instanceof DateTime) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastModifiedDateTime'");
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
     * Gets the presentationValues property value. The associated group policy presentation values with the definition value.
     * @return array<GroupPolicyPresentationValue>|null
    */
    public function getPresentationValues(): ?array {
        $val = $this->getBackingStore()->get('presentationValues');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, GroupPolicyPresentationValue::class);
            /** @var array<GroupPolicyPresentationValue>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presentationValues'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('configurationType', $this->getConfigurationType());
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('definition', $this->getDefinition());
        $writer->writeBooleanValue('enabled', $this->getEnabled());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeCollectionOfObjectValues('presentationValues', $this->getPresentationValues());
    }

    /**
     * Sets the configurationType property value. Group Policy Configuration Type
     * @param GroupPolicyConfigurationType|null $value Value to set for the configurationType property.
    */
    public function setConfigurationType(?GroupPolicyConfigurationType $value): void {
        $this->getBackingStore()->set('configurationType', $value);
    }

    /**
     * Sets the createdDateTime property value. The date and time the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the definition property value. The associated group policy definition with the value.
     * @param GroupPolicyDefinition|null $value Value to set for the definition property.
    */
    public function setDefinition(?GroupPolicyDefinition $value): void {
        $this->getBackingStore()->set('definition', $value);
    }

    /**
     * Sets the enabled property value. Enables or disables the associated group policy definition.
     * @param bool|null $value Value to set for the enabled property.
    */
    public function setEnabled(?bool $value): void {
        $this->getBackingStore()->set('enabled', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the entity was last modified.
     * @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('lastModifiedDateTime', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the presentationValues property value. The associated group policy presentation values with the definition value.
     * @param array<GroupPolicyPresentationValue>|null $value Value to set for the presentationValues property.
    */
    public function setPresentationValues(?array $value): void {
        $this->getBackingStore()->set('presentationValues', $value);
    }

}
