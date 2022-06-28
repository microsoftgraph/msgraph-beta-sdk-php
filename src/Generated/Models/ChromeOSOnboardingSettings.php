<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ChromeOSOnboardingSettings extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastDirectorySyncDateTime The ChromebookTenant's LastDirectorySyncDateTime
    */
    private ?DateTime $lastDirectorySyncDateTime = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The ChromebookTenant's LastModifiedDateTime
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var OnboardingStatus|null $onboardingStatus The ChromebookTenant's OnboardingStatus. Possible values are: unknown, inprogress, onboarded, failed, offboarding, unknownFutureValue.
    */
    private ?OnboardingStatus $onboardingStatus = null;
    
    /**
     * @var string|null $ownerUserPrincipalName The ChromebookTenant's OwnerUserPrincipalName
    */
    private ?string $ownerUserPrincipalName = null;
    
    /**
     * Instantiates a new chromeOSOnboardingSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ChromeOSOnboardingSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ChromeOSOnboardingSettings {
        return new ChromeOSOnboardingSettings();
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
        return array_merge(parent::getFieldDeserializers(), [
            'lastDirectorySyncDateTime' => function (ParseNode $n) use ($o) { $o->setLastDirectorySyncDateTime($n->getDateTimeValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'onboardingStatus' => function (ParseNode $n) use ($o) { $o->setOnboardingStatus($n->getEnumValue(OnboardingStatus::class)); },
            'ownerUserPrincipalName' => function (ParseNode $n) use ($o) { $o->setOwnerUserPrincipalName($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the lastDirectorySyncDateTime property value. The ChromebookTenant's LastDirectorySyncDateTime
     * @return DateTime|null
    */
    public function getLastDirectorySyncDateTime(): ?DateTime {
        return $this->lastDirectorySyncDateTime;
    }

    /**
     * Gets the lastModifiedDateTime property value. The ChromebookTenant's LastModifiedDateTime
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the onboardingStatus property value. The ChromebookTenant's OnboardingStatus. Possible values are: unknown, inprogress, onboarded, failed, offboarding, unknownFutureValue.
     * @return OnboardingStatus|null
    */
    public function getOnboardingStatus(): ?OnboardingStatus {
        return $this->onboardingStatus;
    }

    /**
     * Gets the ownerUserPrincipalName property value. The ChromebookTenant's OwnerUserPrincipalName
     * @return string|null
    */
    public function getOwnerUserPrincipalName(): ?string {
        return $this->ownerUserPrincipalName;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('lastDirectorySyncDateTime', $this->lastDirectorySyncDateTime);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('onboardingStatus', $this->onboardingStatus);
        $writer->writeStringValue('ownerUserPrincipalName', $this->ownerUserPrincipalName);
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
     * Sets the lastDirectorySyncDateTime property value. The ChromebookTenant's LastDirectorySyncDateTime
     *  @param DateTime|null $value Value to set for the lastDirectorySyncDateTime property.
    */
    public function setLastDirectorySyncDateTime(?DateTime $value ): void {
        $this->lastDirectorySyncDateTime = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The ChromebookTenant's LastModifiedDateTime
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the onboardingStatus property value. The ChromebookTenant's OnboardingStatus. Possible values are: unknown, inprogress, onboarded, failed, offboarding, unknownFutureValue.
     *  @param OnboardingStatus|null $value Value to set for the onboardingStatus property.
    */
    public function setOnboardingStatus(?OnboardingStatus $value ): void {
        $this->onboardingStatus = $value;
    }

    /**
     * Sets the ownerUserPrincipalName property value. The ChromebookTenant's OwnerUserPrincipalName
     *  @param string|null $value Value to set for the ownerUserPrincipalName property.
    */
    public function setOwnerUserPrincipalName(?string $value ): void {
        $this->ownerUserPrincipalName = $value;
    }

}
