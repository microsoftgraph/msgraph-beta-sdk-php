<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ChromeOSOnboardingSettings\Disconnect;

use Microsoft\Graph\Beta\Generated\Models\ChromeOSOnboardingStatus;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DisconnectResponse implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var ChromeOSOnboardingStatus|null $chromeOSOnboardingStatus Union type representation for type chromeOSOnboardingStatus */
    private ?ChromeOSOnboardingStatus $chromeOSOnboardingStatus = null;
    
    /**
     * @param ParseNode $parseNode 
     * @return DisconnectResponse
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): DisconnectResponse {
        return new DisconnectResponse();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the chromeOSOnboardingStatus property value. Union type representation for type chromeOSOnboardingStatus
     * @return ChromeOSOnboardingStatus|null
    */
    public function getChromeOSOnboardingStatus(): ?ChromeOSOnboardingStatus {
        return $this->chromeOSOnboardingStatus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'chromeOSOnboardingStatus' => function (self $o, ParseNode $n) { $o->setChromeOSOnboardingStatus($n->getEnumValue(ChromeOSOnboardingStatus::class)); },
        ];
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('chromeOSOnboardingStatus', $this->chromeOSOnboardingStatus);
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
     * Sets the chromeOSOnboardingStatus property value. Union type representation for type chromeOSOnboardingStatus
     *  @param ChromeOSOnboardingStatus|null $value Value to set for the chromeOSOnboardingStatus property.
    */
    public function setChromeOSOnboardingStatus(?ChromeOSOnboardingStatus $value ): void {
        $this->chromeOSOnboardingStatus = $value;
    }

}
