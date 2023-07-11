<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * The user experience analytics anomaly correlation group overview entity contains the information for each correlation group of an anomaly.
*/
class UserExperienceAnalyticsAnomalyCorrelationGroupOverview extends Entity implements Parsable 
{
    /**
     * Instantiates a new userExperienceAnalyticsAnomalyCorrelationGroupOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAnomalyCorrelationGroupOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAnomalyCorrelationGroupOverview {
        return new UserExperienceAnalyticsAnomalyCorrelationGroupOverview();
    }

    /**
     * Gets the anomalyCorrelationGroupCount property value. Indicates the number of correlation groups in the anomaly. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getAnomalyCorrelationGroupCount(): ?int {
        $val = $this->getBackingStore()->get('anomalyCorrelationGroupCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anomalyCorrelationGroupCount'");
    }

    /**
     * Gets the anomalyId property value. The unique identifier of the anomaly. Anomaly details such as name and type can be found in the UserExperienceAnalyticsAnomalySeverityOverview entity.
     * @return string|null
    */
    public function getAnomalyId(): ?string {
        $val = $this->getBackingStore()->get('anomalyId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'anomalyId'");
    }

    /**
     * Gets the correlationGroupAnomalousDeviceCount property value. Indicates the total number of devices affected by the anomaly in the correlation group. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getCorrelationGroupAnomalousDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('correlationGroupAnomalousDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupAnomalousDeviceCount'");
    }

    /**
     * Gets the correlationGroupAtRiskDeviceCount property value. Indicates the total number of devices at risk in the correlation group. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getCorrelationGroupAtRiskDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('correlationGroupAtRiskDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupAtRiskDeviceCount'");
    }

    /**
     * Gets the correlationGroupDeviceCount property value. Indicates the total number of devices in a correlation group. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getCorrelationGroupDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('correlationGroupDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupDeviceCount'");
    }

    /**
     * Gets the correlationGroupFeatures property value. Describes the features of a device that are shared between all devices in a correlation group.
     * @return array<UserExperienceAnalyticsAnomalyCorrelationGroupFeature>|null
    */
    public function getCorrelationGroupFeatures(): ?array {
        $val = $this->getBackingStore()->get('correlationGroupFeatures');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, UserExperienceAnalyticsAnomalyCorrelationGroupFeature::class);
            /** @var array<UserExperienceAnalyticsAnomalyCorrelationGroupFeature>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupFeatures'");
    }

    /**
     * Gets the correlationGroupId property value. The unique identifier for the correlation group which will uniquely identify one of the correlation group within an anomaly. The correlation Id can be mapped to the correlation group name by concatinating the correlation group features. Example of correlation group name which is the indicative of concatenated features names are  for names, Contoso manufacture 4.4.1 and Windows 11.22621.1485.
     * @return string|null
    */
    public function getCorrelationGroupId(): ?string {
        $val = $this->getBackingStore()->get('correlationGroupId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupId'");
    }

    /**
     * Gets the correlationGroupPrevalence property value. Indicates the level of prevalence of the correlation group features in the anomaly. Possible values are: high, medium or low
     * @return UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence|null
    */
    public function getCorrelationGroupPrevalence(): ?UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence {
        $val = $this->getBackingStore()->get('correlationGroupPrevalence');
        if (is_null($val) || $val instanceof UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupPrevalence'");
    }

    /**
     * Gets the correlationGroupPrevalencePercentage property value. The percentage of the devices in the correlation group that are anomalous. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getCorrelationGroupPrevalencePercentage(): ?float {
        $val = $this->getBackingStore()->get('correlationGroupPrevalencePercentage');
        if (is_null($val) || is_float($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'correlationGroupPrevalencePercentage'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'anomalyCorrelationGroupCount' => fn(ParseNode $n) => $o->setAnomalyCorrelationGroupCount($n->getIntegerValue()),
            'anomalyId' => fn(ParseNode $n) => $o->setAnomalyId($n->getStringValue()),
            'correlationGroupAnomalousDeviceCount' => fn(ParseNode $n) => $o->setCorrelationGroupAnomalousDeviceCount($n->getIntegerValue()),
            'correlationGroupAtRiskDeviceCount' => fn(ParseNode $n) => $o->setCorrelationGroupAtRiskDeviceCount($n->getIntegerValue()),
            'correlationGroupDeviceCount' => fn(ParseNode $n) => $o->setCorrelationGroupDeviceCount($n->getIntegerValue()),
            'correlationGroupFeatures' => fn(ParseNode $n) => $o->setCorrelationGroupFeatures($n->getCollectionOfObjectValues([UserExperienceAnalyticsAnomalyCorrelationGroupFeature::class, 'createFromDiscriminatorValue'])),
            'correlationGroupId' => fn(ParseNode $n) => $o->setCorrelationGroupId($n->getStringValue()),
            'correlationGroupPrevalence' => fn(ParseNode $n) => $o->setCorrelationGroupPrevalence($n->getEnumValue(UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence::class)),
            'correlationGroupPrevalencePercentage' => fn(ParseNode $n) => $o->setCorrelationGroupPrevalencePercentage($n->getFloatValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'totalDeviceCount' => fn(ParseNode $n) => $o->setTotalDeviceCount($n->getIntegerValue()),
        ]);
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
     * Gets the totalDeviceCount property value. Indicates the total number of devices in the tenant. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTotalDeviceCount(): ?int {
        $val = $this->getBackingStore()->get('totalDeviceCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalDeviceCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('anomalyCorrelationGroupCount', $this->getAnomalyCorrelationGroupCount());
        $writer->writeStringValue('anomalyId', $this->getAnomalyId());
        $writer->writeIntegerValue('correlationGroupAnomalousDeviceCount', $this->getCorrelationGroupAnomalousDeviceCount());
        $writer->writeIntegerValue('correlationGroupAtRiskDeviceCount', $this->getCorrelationGroupAtRiskDeviceCount());
        $writer->writeIntegerValue('correlationGroupDeviceCount', $this->getCorrelationGroupDeviceCount());
        $writer->writeCollectionOfObjectValues('correlationGroupFeatures', $this->getCorrelationGroupFeatures());
        $writer->writeStringValue('correlationGroupId', $this->getCorrelationGroupId());
        $writer->writeEnumValue('correlationGroupPrevalence', $this->getCorrelationGroupPrevalence());
        $writer->writeFloatValue('correlationGroupPrevalencePercentage', $this->getCorrelationGroupPrevalencePercentage());
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeIntegerValue('totalDeviceCount', $this->getTotalDeviceCount());
    }

    /**
     * Sets the anomalyCorrelationGroupCount property value. Indicates the number of correlation groups in the anomaly. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the anomalyCorrelationGroupCount property.
    */
    public function setAnomalyCorrelationGroupCount(?int $value): void {
        $this->getBackingStore()->set('anomalyCorrelationGroupCount', $value);
    }

    /**
     * Sets the anomalyId property value. The unique identifier of the anomaly. Anomaly details such as name and type can be found in the UserExperienceAnalyticsAnomalySeverityOverview entity.
     * @param string|null $value Value to set for the anomalyId property.
    */
    public function setAnomalyId(?string $value): void {
        $this->getBackingStore()->set('anomalyId', $value);
    }

    /**
     * Sets the correlationGroupAnomalousDeviceCount property value. Indicates the total number of devices affected by the anomaly in the correlation group. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the correlationGroupAnomalousDeviceCount property.
    */
    public function setCorrelationGroupAnomalousDeviceCount(?int $value): void {
        $this->getBackingStore()->set('correlationGroupAnomalousDeviceCount', $value);
    }

    /**
     * Sets the correlationGroupAtRiskDeviceCount property value. Indicates the total number of devices at risk in the correlation group. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the correlationGroupAtRiskDeviceCount property.
    */
    public function setCorrelationGroupAtRiskDeviceCount(?int $value): void {
        $this->getBackingStore()->set('correlationGroupAtRiskDeviceCount', $value);
    }

    /**
     * Sets the correlationGroupDeviceCount property value. Indicates the total number of devices in a correlation group. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the correlationGroupDeviceCount property.
    */
    public function setCorrelationGroupDeviceCount(?int $value): void {
        $this->getBackingStore()->set('correlationGroupDeviceCount', $value);
    }

    /**
     * Sets the correlationGroupFeatures property value. Describes the features of a device that are shared between all devices in a correlation group.
     * @param array<UserExperienceAnalyticsAnomalyCorrelationGroupFeature>|null $value Value to set for the correlationGroupFeatures property.
    */
    public function setCorrelationGroupFeatures(?array $value): void {
        $this->getBackingStore()->set('correlationGroupFeatures', $value);
    }

    /**
     * Sets the correlationGroupId property value. The unique identifier for the correlation group which will uniquely identify one of the correlation group within an anomaly. The correlation Id can be mapped to the correlation group name by concatinating the correlation group features. Example of correlation group name which is the indicative of concatenated features names are  for names, Contoso manufacture 4.4.1 and Windows 11.22621.1485.
     * @param string|null $value Value to set for the correlationGroupId property.
    */
    public function setCorrelationGroupId(?string $value): void {
        $this->getBackingStore()->set('correlationGroupId', $value);
    }

    /**
     * Sets the correlationGroupPrevalence property value. Indicates the level of prevalence of the correlation group features in the anomaly. Possible values are: high, medium or low
     * @param UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence|null $value Value to set for the correlationGroupPrevalence property.
    */
    public function setCorrelationGroupPrevalence(?UserExperienceAnalyticsAnomalyCorrelationGroupPrevalence $value): void {
        $this->getBackingStore()->set('correlationGroupPrevalence', $value);
    }

    /**
     * Sets the correlationGroupPrevalencePercentage property value. The percentage of the devices in the correlation group that are anomalous. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @param float|null $value Value to set for the correlationGroupPrevalencePercentage property.
    */
    public function setCorrelationGroupPrevalencePercentage(?float $value): void {
        $this->getBackingStore()->set('correlationGroupPrevalencePercentage', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

    /**
     * Sets the totalDeviceCount property value. Indicates the total number of devices in the tenant. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the totalDeviceCount property.
    */
    public function setTotalDeviceCount(?int $value): void {
        $this->getBackingStore()->set('totalDeviceCount', $value);
    }

}
