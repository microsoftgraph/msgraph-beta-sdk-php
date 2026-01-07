<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Represents a response message in a chat.
*/
class CopilotConversationResponseMessage extends CopilotConversationMessage implements Parsable 
{
    /**
     * Instantiates a new CopilotConversationResponseMessage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.copilotConversationResponseMessage');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CopilotConversationResponseMessage
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CopilotConversationResponseMessage {
        return new CopilotConversationResponseMessage();
    }

    /**
     * Gets the adaptiveCards property value. The adaptiveCards property
     * @return array<Json>|null
    */
    public function getAdaptiveCards(): ?array {
        $val = $this->getBackingStore()->get('adaptiveCards');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, Json::class);
            /** @var array<Json>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'adaptiveCards'");
    }

    /**
     * Gets the attributions property value. The attributions property
     * @return array<CopilotConversationAttribution>|null
    */
    public function getAttributions(): ?array {
        $val = $this->getBackingStore()->get('attributions');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, CopilotConversationAttribution::class);
            /** @var array<CopilotConversationAttribution>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'attributions'");
    }

    /**
     * Gets the createdDateTime property value. The createdDateTime property
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
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'adaptiveCards' => fn(ParseNode $n) => $o->setAdaptiveCards($n->getCollectionOfObjectValues([Json::class, 'createFromDiscriminatorValue'])),
            'attributions' => fn(ParseNode $n) => $o->setAttributions($n->getCollectionOfObjectValues([CopilotConversationAttribution::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'sensitivityLabel' => fn(ParseNode $n) => $o->setSensitivityLabel($n->getObjectValue([SearchSensitivityLabelInfo::class, 'createFromDiscriminatorValue'])),
        ]);
    }

    /**
     * Gets the sensitivityLabel property value. The sensitivityLabel property
     * @return SearchSensitivityLabelInfo|null
    */
    public function getSensitivityLabel(): ?SearchSensitivityLabelInfo {
        $val = $this->getBackingStore()->get('sensitivityLabel');
        if (is_null($val) || $val instanceof SearchSensitivityLabelInfo) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sensitivityLabel'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
    }

    /**
     * Sets the adaptiveCards property value. The adaptiveCards property
     * @param array<Json>|null $value Value to set for the adaptiveCards property.
    */
    public function setAdaptiveCards(?array $value): void {
        $this->getBackingStore()->set('adaptiveCards', $value);
    }

    /**
     * Sets the attributions property value. The attributions property
     * @param array<CopilotConversationAttribution>|null $value Value to set for the attributions property.
    */
    public function setAttributions(?array $value): void {
        $this->getBackingStore()->set('attributions', $value);
    }

    /**
     * Sets the createdDateTime property value. The createdDateTime property
     * @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value): void {
        $this->getBackingStore()->set('createdDateTime', $value);
    }

    /**
     * Sets the sensitivityLabel property value. The sensitivityLabel property
     * @param SearchSensitivityLabelInfo|null $value Value to set for the sensitivityLabel property.
    */
    public function setSensitivityLabel(?SearchSensitivityLabelInfo $value): void {
        $this->getBackingStore()->set('sensitivityLabel', $value);
    }

}
