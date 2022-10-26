<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsInsight implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $insightId The unique identifier of the user experience analytics insight.
    */
    private ?string $insightId = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var UserExperienceAnalyticsInsightSeverity|null $severity The severity property
    */
    private ?UserExperienceAnalyticsInsightSeverity $severity = null;
    
    /**
     * @var string|null $userExperienceAnalyticsMetricId The unique identifier of the user experience analytics insight.
    */
    private ?string $userExperienceAnalyticsMetricId = null;
    
    /**
     * @var array<UserExperienceAnalyticsInsightValue>|null $values The value of the user experience analytics insight.
    */
    private ?array $values = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsInsight and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.userExperienceAnalyticsInsight');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsInsight
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsInsight {
        return new UserExperienceAnalyticsInsight();
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
            'insightId' => fn(ParseNode $n) => $o->setInsightId($n->getStringValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'severity' => fn(ParseNode $n) => $o->setSeverity($n->getEnumValue(UserExperienceAnalyticsInsightSeverity::class)),
            'userExperienceAnalyticsMetricId' => fn(ParseNode $n) => $o->setUserExperienceAnalyticsMetricId($n->getStringValue()),
            'values' => fn(ParseNode $n) => $o->setValues($n->getCollectionOfObjectValues([UserExperienceAnalyticsInsightValue::class, 'createFromDiscriminatorValue'])),
        ];
    }

    /**
     * Gets the insightId property value. The unique identifier of the user experience analytics insight.
     * @return string|null
    */
    public function getInsightId(): ?string {
        return $this->insightId;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the severity property value. The severity property
     * @return UserExperienceAnalyticsInsightSeverity|null
    */
    public function getSeverity(): ?UserExperienceAnalyticsInsightSeverity {
        return $this->severity;
    }

    /**
     * Gets the userExperienceAnalyticsMetricId property value. The unique identifier of the user experience analytics insight.
     * @return string|null
    */
    public function getUserExperienceAnalyticsMetricId(): ?string {
        return $this->userExperienceAnalyticsMetricId;
    }

    /**
     * Gets the values property value. The value of the user experience analytics insight.
     * @return array<UserExperienceAnalyticsInsightValue>|null
    */
    public function getValues(): ?array {
        return $this->values;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('insightId', $this->insightId);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('severity', $this->severity);
        $writer->writeStringValue('userExperienceAnalyticsMetricId', $this->userExperienceAnalyticsMetricId);
        $writer->writeCollectionOfObjectValues('values', $this->values);
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
     * Sets the insightId property value. The unique identifier of the user experience analytics insight.
     *  @param string|null $value Value to set for the insightId property.
    */
    public function setInsightId(?string $value ): void {
        $this->insightId = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the severity property value. The severity property
     *  @param UserExperienceAnalyticsInsightSeverity|null $value Value to set for the severity property.
    */
    public function setSeverity(?UserExperienceAnalyticsInsightSeverity $value ): void {
        $this->severity = $value;
    }

    /**
     * Sets the userExperienceAnalyticsMetricId property value. The unique identifier of the user experience analytics insight.
     *  @param string|null $value Value to set for the userExperienceAnalyticsMetricId property.
    */
    public function setUserExperienceAnalyticsMetricId(?string $value ): void {
        $this->userExperienceAnalyticsMetricId = $value;
    }

    /**
     * Sets the values property value. The value of the user experience analytics insight.
     *  @param array<UserExperienceAnalyticsInsightValue>|null $value Value to set for the values property.
    */
    public function setValues(?array $value ): void {
        $this->values = $value;
    }

}
