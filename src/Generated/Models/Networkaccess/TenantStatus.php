<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Graph\Beta\Generated\Models\Entity;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class TenantStatus extends Entity implements Parsable 
{
    /**
     * @var string|null $odataType The OdataType property
    */
    public ?string $odataType = null;
    
    /**
     * Instantiates a new tenantStatus and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return TenantStatus
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): TenantStatus {
        return new TenantStatus();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'onboardingErrorMessage' => fn(ParseNode $n) => $o->setOnboardingErrorMessage($n->getStringValue()),
            'onboardingStatus' => fn(ParseNode $n) => $o->setOnboardingStatus($n->getEnumValue(OnboardingStatus::class)),
        ]);
    }

    /**
     * Gets the onboardingErrorMessage property value. Reflects a message to the user in case of an error.
     * @return string|null
    */
    public function getOnboardingErrorMessage(): ?string {
        $val = $this->getBackingStore()->get('onboardingErrorMessage');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardingErrorMessage'");
    }

    /**
     * Gets the onboardingStatus property value. The onboardingStatus property
     * @return OnboardingStatus|null
    */
    public function getOnboardingStatus(): ?OnboardingStatus {
        $val = $this->getBackingStore()->get('onboardingStatus');
        if (is_null($val) || $val instanceof OnboardingStatus) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'onboardingStatus'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('@odata.type', $this->getOdataType());
        $writer->writeStringValue('onboardingErrorMessage', $this->getOnboardingErrorMessage());
        $writer->writeEnumValue('onboardingStatus', $this->getOnboardingStatus());
    }

    /**
     * Sets the onboardingErrorMessage property value. Reflects a message to the user in case of an error.
     * @param string|null $value Value to set for the onboardingErrorMessage property.
    */
    public function setOnboardingErrorMessage(?string $value): void {
        $this->getBackingStore()->set('onboardingErrorMessage', $value);
    }

    /**
     * Sets the onboardingStatus property value. The onboardingStatus property
     * @param OnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?OnboardingStatus $value): void {
        $this->getBackingStore()->set('onboardingStatus', $value);
    }

}
