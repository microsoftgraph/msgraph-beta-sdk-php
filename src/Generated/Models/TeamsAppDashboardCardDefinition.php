<?php

namespace Microsoft\\Graph\\Beta\\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TeamsAppDashboardCardDefinition extends Entity implements Parsable 
{
    /**
     * Instantiates a new TeamsAppDashboardCardDefinition and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TeamsAppDashboardCardDefinition
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TeamsAppDashboardCardDefinition {
        return new TeamsAppDashboardCardDefinition();
    }

    /**
     * Gets the contentSource property value. The configuration for the source of the card content. Required.
     * @return TeamsAppDashboardCardContentSource|null
    */
    public function getContentSource(): ?TeamsAppDashboardCardContentSource {
        $val = $this->getBackingStore()->get('contentSource');
        if (is_null($val) || $val instanceof TeamsAppDashboardCardContentSource) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentSource'");
    }

    /**
     * Gets the defaultSize property value. The size of the card. The possible values are: medium, large, unknownFutureValue. Required.
     * @return TeamsAppDashboardCardSize|null
    */
    public function getDefaultSize(): ?TeamsAppDashboardCardSize {
        $val = $this->getBackingStore()->get('defaultSize');
        if (is_null($val) || $val instanceof TeamsAppDashboardCardSize) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'defaultSize'");
    }

    /**
     * Gets the description property value. The description for the card. Required.
     * @return string|null
    */
    public function getDescription(): ?string {
        $val = $this->getBackingStore()->get('description');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'description'");
    }

    /**
     * Gets the displayName property value. The name of the card. Required.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        $val = $this->getBackingStore()->get('displayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'displayName'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'contentSource' => fn(ParseNode $n) => $o->setContentSource($n->getObjectValue([TeamsAppDashboardCardContentSource::class, 'createFromDiscriminatorValue'])),
            'defaultSize' => fn(ParseNode $n) => $o->setDefaultSize($n->getEnumValue(TeamsAppDashboardCardSize::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'icon' => fn(ParseNode $n) => $o->setIcon($n->getObjectValue([TeamsAppDashboardCardIcon::class, 'createFromDiscriminatorValue'])),
            'pickerGroupId' => fn(ParseNode $n) => $o->setPickerGroupId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the icon property value. Configuration for the display of the icon in the card picker. If neither this nor any of its properties (iconUrl and officeUIFabricIconName) are specified, the color icon of the app is used. Optional.
     * @return TeamsAppDashboardCardIcon|null
    */
    public function getIcon(): ?TeamsAppDashboardCardIcon {
        $val = $this->getBackingStore()->get('icon');
        if (is_null($val) || $val instanceof TeamsAppDashboardCardIcon) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'icon'");
    }

    /**
     * Gets the pickerGroupId property value. ID for the group in the card picker. Required.
     * @return string|null
    */
    public function getPickerGroupId(): ?string {
        $val = $this->getBackingStore()->get('pickerGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'pickerGroupId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('contentSource', $this->getContentSource());
        $writer->writeEnumValue('defaultSize', $this->getDefaultSize());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('displayName', $this->getDisplayName());
        $writer->writeObjectValue('icon', $this->getIcon());
        $writer->writeStringValue('pickerGroupId', $this->getPickerGroupId());
    }

    /**
     * Sets the contentSource property value. The configuration for the source of the card content. Required.
     * @param TeamsAppDashboardCardContentSource|null $value Value to set for the contentSource property.
    */
    public function setContentSource(?TeamsAppDashboardCardContentSource $value): void {
        $this->getBackingStore()->set('contentSource', $value);
    }

    /**
     * Sets the defaultSize property value. The size of the card. The possible values are: medium, large, unknownFutureValue. Required.
     * @param TeamsAppDashboardCardSize|null $value Value to set for the defaultSize property.
    */
    public function setDefaultSize(?TeamsAppDashboardCardSize $value): void {
        $this->getBackingStore()->set('defaultSize', $value);
    }

    /**
     * Sets the description property value. The description for the card. Required.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the displayName property value. The name of the card. Required.
     * @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value): void {
        $this->getBackingStore()->set('displayName', $value);
    }

    /**
     * Sets the icon property value. Configuration for the display of the icon in the card picker. If neither this nor any of its properties (iconUrl and officeUIFabricIconName) are specified, the color icon of the app is used. Optional.
     * @param TeamsAppDashboardCardIcon|null $value Value to set for the icon property.
    */
    public function setIcon(?TeamsAppDashboardCardIcon $value): void {
        $this->getBackingStore()->set('icon', $value);
    }

    /**
     * Sets the pickerGroupId property value. ID for the group in the card picker. Required.
     * @param string|null $value Value to set for the pickerGroupId property.
    */
    public function setPickerGroupId(?string $value): void {
        $this->getBackingStore()->set('pickerGroupId', $value);
    }

}
