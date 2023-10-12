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
 * The user experience analytics anomaly severity overview entity contains the count information for each severity of anomaly.
*/
class UserExperienceAnalyticsAnomalySeverityOverview implements AdditionalDataHolder, BackedModel, Parsable 
{
    /**
     * @var BackingStore $backingStore Stores model information.
    */
    private BackingStore $backingStore;
    
    /**
     * Instantiates a new userExperienceAnalyticsAnomalySeverityOverview and sets the default values.
    */
    public function __construct() {
        $this->backingStore = BackingStoreFactorySingleton::getInstance()->createBackingStore();
        $this->setAdditionalData([]);
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsAnomalySeverityOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsAnomalySeverityOverview {
        return new UserExperienceAnalyticsAnomalySeverityOverview();
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
            'highSeverityAnomalyCount' => fn(ParseNode $n) => $o->setHighSeverityAnomalyCount($n->getIntegerValue()),
            'informationalSeverityAnomalyCount' => fn(ParseNode $n) => $o->setInformationalSeverityAnomalyCount($n->getIntegerValue()),
            'lowSeverityAnomalyCount' => fn(ParseNode $n) => $o->setLowSeverityAnomalyCount($n->getIntegerValue()),
            'mediumSeverityAnomalyCount' => fn(ParseNode $n) => $o->setMediumSeverityAnomalyCount($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the highSeverityAnomalyCount property value. Indicates count of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getHighSeverityAnomalyCount(): ?int {
        $val = $this->getBackingStore()->get('highSeverityAnomalyCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'highSeverityAnomalyCount'");
    }

    /**
     * Gets the informationalSeverityAnomalyCount property value. Indicates count of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getInformationalSeverityAnomalyCount(): ?int {
        $val = $this->getBackingStore()->get('informationalSeverityAnomalyCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'informationalSeverityAnomalyCount'");
    }

    /**
     * Gets the lowSeverityAnomalyCount property value. Indicates count of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getLowSeverityAnomalyCount(): ?int {
        $val = $this->getBackingStore()->get('lowSeverityAnomalyCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lowSeverityAnomalyCount'");
    }

    /**
     * Gets the mediumSeverityAnomalyCount property value. Indicates count of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMediumSeverityAnomalyCount(): ?int {
        $val = $this->getBackingStore()->get('mediumSeverityAnomalyCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'mediumSeverityAnomalyCount'");
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
        $writer->writeIntegerValue('highSeverityAnomalyCount', $this->getHighSeverityAnomalyCount());
        $writer->writeIntegerValue('informationalSeverityAnomalyCount', $this->getInformationalSeverityAnomalyCount());
        $writer->writeIntegerValue('lowSeverityAnomalyCount', $this->getLowSeverityAnomalyCount());
        $writer->writeIntegerValue('mediumSeverityAnomalyCount', $this->getMediumSeverityAnomalyCount());
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
     * Sets the highSeverityAnomalyCount property value. Indicates count of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the highSeverityAnomalyCount property.
    */
    public function setHighSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('highSeverityAnomalyCount', $value);
    }

    /**
     * Sets the informationalSeverityAnomalyCount property value. Indicates count of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the informationalSeverityAnomalyCount property.
    */
    public function setInformationalSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('informationalSeverityAnomalyCount', $value);
    }

    /**
     * Sets the lowSeverityAnomalyCount property value. Indicates count of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the lowSeverityAnomalyCount property.
    */
    public function setLowSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('lowSeverityAnomalyCount', $value);
    }

    /**
     * Sets the mediumSeverityAnomalyCount property value. Indicates count of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @param int|null $value Value to set for the mediumSeverityAnomalyCount property.
    */
    public function setMediumSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('mediumSeverityAnomalyCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     * @param string|null $value Value to set for the @odata.type property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
