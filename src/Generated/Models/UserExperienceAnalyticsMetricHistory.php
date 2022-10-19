<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsMetricHistory extends Entity implements Parsable 
{
    /**
     * @var string|null $deviceId The user experience analytics device id.
    */
    private ?string $deviceId = null;
    
    /**
     * @var DateTime|null $metricDateTime The user experience analytics metric date time.
    */
    private ?DateTime $metricDateTime = null;
    
    /**
     * @var string|null $metricType The user experience analytics metric type.
    */
    private ?string $metricType = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsMetricHistory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsMetricHistory');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsMetricHistory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsMetricHistory {
        return new UserExperienceAnalyticsMetricHistory();
    }

    /**
     * Gets the deviceId property value. The user experience analytics device id.
     * @return string|null
    */
    public function getDeviceId(): ?string {
        return $this->deviceId;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceId' => fn(ParseNode $n) => $o->setDeviceId($n->getStringValue()),
            'metricDateTime' => fn(ParseNode $n) => $o->setMetricDateTime($n->getDateTimeValue()),
            'metricType' => fn(ParseNode $n) => $o->setMetricType($n->getStringValue()),
        ]);
    }

    /**
     * Gets the metricDateTime property value. The user experience analytics metric date time.
     * @return DateTime|null
    */
    public function getMetricDateTime(): ?DateTime {
        return $this->metricDateTime;
    }

    /**
     * Gets the metricType property value. The user experience analytics metric type.
     * @return string|null
    */
    public function getMetricType(): ?string {
        return $this->metricType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('deviceId', $this->deviceId);
        $writer->writeDateTimeValue('metricDateTime', $this->metricDateTime);
        $writer->writeStringValue('metricType', $this->metricType);
    }

    /**
     * Sets the deviceId property value. The user experience analytics device id.
     *  @param string|null $value Value to set for the deviceId property.
    */
    public function setDeviceId(?string $value ): void {
        $this->deviceId = $value;
    }

    /**
     * Sets the metricDateTime property value. The user experience analytics metric date time.
     *  @param DateTime|null $value Value to set for the metricDateTime property.
    */
    public function setMetricDateTime(?DateTime $value ): void {
        $this->metricDateTime = $value;
    }

    /**
     * Sets the metricType property value. The user experience analytics metric type.
     *  @param string|null $value Value to set for the metricType property.
    */
    public function setMetricType(?string $value ): void {
        $this->metricType = $value;
    }

}
