<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsAnomalySeverityOverview implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $highSeverityAnomalyCount The number of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    */
    private ?int $highSeverityAnomalyCount = null;
    
    /**
     * @var int|null $informationalSeverityAnomalyCount The number of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    */
    private ?int $informationalSeverityAnomalyCount = null;
    
    /**
     * @var int|null $lowSeverityAnomalyCount The number of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    */
    private ?int $lowSeverityAnomalyCount = null;
    
    /**
     * @var int|null $mediumSeverityAnomalyCount The number of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
    */
    private ?int $mediumSeverityAnomalyCount = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var int|null $otherSeverityAnomalyCount The number of anomalies which have been detected with undefined severity. Valid values -2147483648 to 2147483647
    */
    private ?int $otherSeverityAnomalyCount = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsAnomalySeverityOverview and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsAnomalySeverityOverview');
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
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'highSeverityAnomalyCount' => function (ParseNode $n) use ($o) { $o->setHighSeverityAnomalyCount($n->getIntegerValue()); },
            'informationalSeverityAnomalyCount' => function (ParseNode $n) use ($o) { $o->setInformationalSeverityAnomalyCount($n->getIntegerValue()); },
            'lowSeverityAnomalyCount' => function (ParseNode $n) use ($o) { $o->setLowSeverityAnomalyCount($n->getIntegerValue()); },
            'mediumSeverityAnomalyCount' => function (ParseNode $n) use ($o) { $o->setMediumSeverityAnomalyCount($n->getIntegerValue()); },
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'otherSeverityAnomalyCount' => function (ParseNode $n) use ($o) { $o->setOtherSeverityAnomalyCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the highSeverityAnomalyCount property value. The number of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getHighSeverityAnomalyCount(): ?int {
        return $this->highSeverityAnomalyCount;
    }

    /**
     * Gets the informationalSeverityAnomalyCount property value. The number of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getInformationalSeverityAnomalyCount(): ?int {
        return $this->informationalSeverityAnomalyCount;
    }

    /**
     * Gets the lowSeverityAnomalyCount property value. The number of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getLowSeverityAnomalyCount(): ?int {
        return $this->lowSeverityAnomalyCount;
    }

    /**
     * Gets the mediumSeverityAnomalyCount property value. The number of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getMediumSeverityAnomalyCount(): ?int {
        return $this->mediumSeverityAnomalyCount;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the otherSeverityAnomalyCount property value. The number of anomalies which have been detected with undefined severity. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getOtherSeverityAnomalyCount(): ?int {
        return $this->otherSeverityAnomalyCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('highSeverityAnomalyCount', $this->highSeverityAnomalyCount);
        $writer->writeIntegerValue('informationalSeverityAnomalyCount', $this->informationalSeverityAnomalyCount);
        $writer->writeIntegerValue('lowSeverityAnomalyCount', $this->lowSeverityAnomalyCount);
        $writer->writeIntegerValue('mediumSeverityAnomalyCount', $this->mediumSeverityAnomalyCount);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeIntegerValue('otherSeverityAnomalyCount', $this->otherSeverityAnomalyCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the highSeverityAnomalyCount property value. The number of high severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the highSeverityAnomalyCount property.
    */
    public function setHighSeverityAnomalyCount(?int $value ): void {
        $this->highSeverityAnomalyCount = $value;
    }

    /**
     * Sets the informationalSeverityAnomalyCount property value. The number of informational severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the informationalSeverityAnomalyCount property.
    */
    public function setInformationalSeverityAnomalyCount(?int $value ): void {
        $this->informationalSeverityAnomalyCount = $value;
    }

    /**
     * Sets the lowSeverityAnomalyCount property value. The number of low severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the lowSeverityAnomalyCount property.
    */
    public function setLowSeverityAnomalyCount(?int $value ): void {
        $this->lowSeverityAnomalyCount = $value;
    }

    /**
     * Sets the mediumSeverityAnomalyCount property value. The number of medium severity anomalies which have been detected. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the mediumSeverityAnomalyCount property.
    */
    public function setMediumSeverityAnomalyCount(?int $value ): void {
        $this->mediumSeverityAnomalyCount = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the otherSeverityAnomalyCount property value. The number of anomalies which have been detected with undefined severity. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the otherSeverityAnomalyCount property.
    */
    public function setOtherSeverityAnomalyCount(?int $value ): void {
        $this->otherSeverityAnomalyCount = $value;
    }

}
