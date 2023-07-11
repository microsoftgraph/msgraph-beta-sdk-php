<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The base presentation value entity that stores the value for a single group policy presentation.
*/
class GroupPolicyPresentationValue extends Entity implements Parsable 
{
    /**
     * Instantiates a new groupPolicyPresentationValue and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return GroupPolicyPresentationValue
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): GroupPolicyPresentationValue {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.groupPolicyPresentationValueBoolean': return new GroupPolicyPresentationValueBoolean();
                case '#microsoft.graph.groupPolicyPresentationValueDecimal': return new GroupPolicyPresentationValueDecimal();
                case '#microsoft.graph.groupPolicyPresentationValueList': return new GroupPolicyPresentationValueList();
                case '#microsoft.graph.groupPolicyPresentationValueLongDecimal': return new GroupPolicyPresentationValueLongDecimal();
                case '#microsoft.graph.groupPolicyPresentationValueMultiText': return new GroupPolicyPresentationValueMultiText();
                case '#microsoft.graph.groupPolicyPresentationValueText': return new GroupPolicyPresentationValueText();
            }
        }
        return new GroupPolicyPresentationValue();
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
     * Gets the definitionValue property value. The group policy definition value associated with the presentation value.
     * @return GroupPolicyDefinitionValue|null
    */
    public function getDefinitionValue(): ?GroupPolicyDefinitionValue {
        $val = $this->getBackingStore()->get('definitionValue');
        if (is_null($val) || $val instanceof GroupPolicyDefinitionValue) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'definitionValue'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'definitionValue' => fn(ParseNode $n) => $o->setDefinitionValue($n->getObjectValue([GroupPolicyDefinitionValue::class, 'createFromDiscriminatorValue'])),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'presentation' => fn(ParseNode $n) => $o->setPresentation($n->getObjectValue([GroupPolicyPresentation::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. The date and time the object was last modified.
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
     * Gets the presentation property value. The group policy presentation associated with the presentation value.
     * @return GroupPolicyPresentation|null
    */
    public function getPresentation(): ?GroupPolicyPresentation {
        $val = $this->getBackingStore()->get('presentation');
        if (is_null($val) || $val instanceof GroupPolicyPresentation) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'presentation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->getCreatedDateTime());
        $writer->writeObjectValue('definitionValue', $this->getDefinitionValue());
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->getLastModifiedDateTime());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeObjectValue('presentation', $this->getPresentation());
    }

    /**
     * Sets the createdDateTime property value. The date and time the object was created.
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the definitionValue property value. The group policy definition value associated with the presentation value.
     * @param GroupPolicyDefinitionValue|null $value Value to set for the definitionValue property.
    */
    public function setDefinitionValue(?GroupPolicyDefinitionValue $value): void {
        $this->getBackingStore()->set('definitionValue', $value);
    }

    /**
     * Sets the lastModifiedDateTime property value. The date and time the object was last modified.
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
     * Sets the presentation property value. The group policy presentation associated with the presentation value.
     * @param GroupPolicyPresentation|null $value Value to set for the presentation property.
    */
    public function setPresentation(?GroupPolicyPresentation $value): void {
        $this->getBackingStore()->set('presentation', $value);
    }

}
