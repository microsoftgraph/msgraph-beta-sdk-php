<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Store\BackedModel;
use Microsoft\Kiota\Abstractions\Store\BackingStore;
use Microsoft\Kiota\Abstractions\Store\BackingStoreFactorySingleton;

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
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): ?array {
        return $this->getBackingStore()->get('additionalData');
    }

    /**
     * Gets the backingStore property value. Stores model information.
     * @return BackingStore
    */
    public function getBackingStore(): BackingStore {
        return $this->backingStore;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
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
     * Gets the highSeverityAnomalyCount property value. The number of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getHighSeverityAnomalyCount(): ?int {
        return $this->getBackingStore()->get('highSeverityAnomalyCount');
    }

    /**
     * Gets the informationalSeverityAnomalyCount property value. The number of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getInformationalSeverityAnomalyCount(): ?int {
        return $this->getBackingStore()->get('informationalSeverityAnomalyCount');
    }

    /**
     * Gets the lowSeverityAnomalyCount property value. The number of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getLowSeverityAnomalyCount(): ?int {
        return $this->getBackingStore()->get('lowSeverityAnomalyCount');
    }

    /**
     * Gets the mediumSeverityAnomalyCount property value. The number of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMediumSeverityAnomalyCount(): ?int {
        return $this->getBackingStore()->get('mediumSeverityAnomalyCount');
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->getBackingStore()->get('odataType');
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
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value): void {
        $this->getBackingStore()->set('additionalData', $value);
    }

    /**
     * Sets the backingStore property value. Stores model information.
     *  @param BackingStore $value Value to set for the BackingStore property.
    */
    public function setBackingStore(BackingStore $value): void {
        $this->backingStore = $value;
    }

    /**
     * Sets the highSeverityAnomalyCount property value. The number of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the highSeverityAnomalyCount property.
    */
    public function setHighSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('highSeverityAnomalyCount', $value);
    }

    /**
     * Sets the informationalSeverityAnomalyCount property value. The number of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the informationalSeverityAnomalyCount property.
    */
    public function setInformationalSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('informationalSeverityAnomalyCount', $value);
    }

    /**
     * Sets the lowSeverityAnomalyCount property value. The number of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the lowSeverityAnomalyCount property.
    */
    public function setLowSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('lowSeverityAnomalyCount', $value);
    }

    /**
     * Sets the mediumSeverityAnomalyCount property value. The number of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the mediumSeverityAnomalyCount property.
    */
    public function setMediumSeverityAnomalyCount(?int $value): void {
        $this->getBackingStore()->set('mediumSeverityAnomalyCount', $value);
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value): void {
        $this->getBackingStore()->set('odataType', $value);
    }

}
