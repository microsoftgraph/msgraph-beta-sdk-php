<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AdminConsent implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var AdminConsentState|null $shareAPNSData Admin consent state.
    */
    private ?AdminConsentState $shareAPNSData = null;
    
    /**
     * @var AdminConsentState|null $shareUserExperienceAnalyticsData Admin consent state.
    */
    private ?AdminConsentState $shareUserExperienceAnalyticsData = null;
    
    /**
     * Instantiates a new adminConsent and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.adminConsent');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AdminConsent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AdminConsent {
        return new AdminConsent();
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
            '@odata.type' => function (ParseNode $n) use ($o) { $o->setOdataType($n->getStringValue()); },
            'shareAPNSData' => function (ParseNode $n) use ($o) { $o->setShareAPNSData($n->getEnumValue(AdminConsentState::class)); },
            'shareUserExperienceAnalyticsData' => function (ParseNode $n) use ($o) { $o->setShareUserExperienceAnalyticsData($n->getEnumValue(AdminConsentState::class)); },
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the shareAPNSData property value. Admin consent state.
     * @return AdminConsentState|null
    */
    public function getShareAPNSData(): ?AdminConsentState {
        return $this->shareAPNSData;
    }

    /**
     * Gets the shareUserExperienceAnalyticsData property value. Admin consent state.
     * @return AdminConsentState|null
    */
    public function getShareUserExperienceAnalyticsData(): ?AdminConsentState {
        return $this->shareUserExperienceAnalyticsData;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('shareAPNSData', $this->shareAPNSData);
        $writer->writeEnumValue('shareUserExperienceAnalyticsData', $this->shareUserExperienceAnalyticsData);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the shareAPNSData property value. Admin consent state.
     *  @param AdminConsentState|null $value Value to set for the shareAPNSData property.
    */
    public function setShareAPNSData(?AdminConsentState $value ): void {
        $this->shareAPNSData = $value;
    }

    /**
     * Sets the shareUserExperienceAnalyticsData property value. Admin consent state.
     *  @param AdminConsentState|null $value Value to set for the shareUserExperienceAnalyticsData property.
    */
    public function setShareUserExperienceAnalyticsData(?AdminConsentState $value ): void {
        $this->shareUserExperienceAnalyticsData = $value;
    }

}
