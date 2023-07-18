<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The user experience analytics top impacting process entity.
*/
class UserExperienceAnalyticsImpactingProcess extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsImpactingProcess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsImpactingProcess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsImpactingProcess {
        return new UserExperienceAnalyticsImpactingProcess();
    }

    /**
     * Gets the category property value. The category of impacting process.
     * @return string|null
    */
    public function getCategory(): ?string {
        $val = $this->getBackingStore()->get('category');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'category'");
    }

    /**
     * Gets the description property value. The description of process.
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
     * Gets the deviceId property value. The unique identifier of the impacted device.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        $val = $this->getBackingStore()->get('deviceId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'deviceId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'category' => fn(ParseNode $n) => $o->setCategory($n->getStringValue()),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'impactValue' => fn(ParseNode $n) => $o->setImpactValue($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'processName' => fn(ParseNode $n) => $o->setProcessName($n->getStringValue()),
            'publisher' => fn(ParseNode $n) => $o->setPublisher($n->getStringValue()),
        ]);
    }

    /**
     * Gets the impactValue property value. The impact value of the process. Valid values 0 to 1.79769313486232E+308
     * @return float|null
    */
    public function getImpactValue(): ?float {
        $val = $this->getBackingStore()->get('impactValue');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'impactValue'");
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
     * Gets the processName property value. The process name.
     * @return string|null
    */
    public function getProcessName(): ?string {
        $val = $this->getBackingStore()->get('processName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processName'");
    }

    /**
     * Gets the publisher property value. The publisher of the process.
     * @return string|null
    */
    public function getPublisher(): ?string {
        $val = $this->getBackingStore()->get('publisher');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'publisher'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('category', $this->getCategory());
        $writer->writeStringValue('description', $this->getDescription());
        $writer->writeStringValue('deviceId', $this->getDeviceId());
        $writer->writeFloatValue('impactValue', $this->getImpactValue());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('processName', $this->getProcessName());
        $writer->writeStringValue('publisher', $this->getPublisher());
    }

    /**
     * Sets the category property value. The category of impacting process.
     * @param string|null $value Value to set for the category property.
    */
    public function setCategory(?string $value): void {
        $this->getBackingStore()->set('category', $value);
    }

    /**
     * Sets the description property value. The description of process.
     * @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value): void {
        $this->getBackingStore()->set('description', $value);
    }

    /**
     * Sets the deviceId property value. The unique identifier of the impacted device.
     * @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value): void {
        $this->getBackingStore()->set('deviceId', $value);
    }

    /**
     * Sets the impactValue property value. The impact value of the process. Valid values 0 to 1.79769313486232E+308
     * @param float|null $value Value to set for the impactValue property.
    */
    public function setImpactValue(?float $value): void {
        $this->getBackingStore()->set('impactValue', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the processName property value. The process name.
     * @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value): void {
        $this->getBackingStore()->set('processName', $value);
    }

    /**
     * Sets the publisher property value. The publisher of the process.
     * @param string|null $value Value to set for the publisher property.
    */
    public function setPublisher(?string $value): void {
        $this->getBackingStore()->set('publisher', $value);
    }

}
