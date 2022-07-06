<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DataSharingConsent extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $grantDateTime The time consent was granted for this account
    */
    private ?DateTime $grantDateTime = null;
    
    /**
     * @var bool|null $granted The granted state for the data sharing consent
    */
    private ?bool $granted = null;
    
    /**
     * @var string|null $grantedByUpn The Upn of the user that granted consent for this account
    */
    private ?string $grantedByUpn = null;
    
    /**
     * @var string|null $grantedByUserId The UserId of the user that granted consent for this account
    */
    private ?string $grantedByUserId = null;
    
    /**
     * @var string|null $serviceDisplayName The display name of the service work flow
    */
    private ?string $serviceDisplayName = null;
    
    /**
     * @var string|null $termsUrl The TermsUrl for the data sharing consent
    */
    private ?string $termsUrl = null;
    
    /**
     * Instantiates a new DataSharingConsent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DataSharingConsent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DataSharingConsent {
        return new DataSharingConsent();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'grantDateTime' => function (ParseNode $n) use ($o) { $o->setGrantDateTime($n->getDateTimeValue()); },
            'granted' => function (ParseNode $n) use ($o) { $o->setGranted($n->getBooleanValue()); },
            'grantedByUpn' => function (ParseNode $n) use ($o) { $o->setGrantedByUpn($n->getStringValue()); },
            'grantedByUserId' => function (ParseNode $n) use ($o) { $o->setGrantedByUserId($n->getStringValue()); },
            'serviceDisplayName' => function (ParseNode $n) use ($o) { $o->setServiceDisplayName($n->getStringValue()); },
            'termsUrl' => function (ParseNode $n) use ($o) { $o->setTermsUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the grantDateTime property value. The time consent was granted for this account
     * @return DateTime|null
    */
    public function getGrantDateTime(): ?DateTime {
        return $this->grantDateTime;
    }

    /**
     * Gets the granted property value. The granted state for the data sharing consent
     * @return bool|null
    */
    public function getGranted(): ?bool {
        return $this->granted;
    }

    /**
     * Gets the grantedByUpn property value. The Upn of the user that granted consent for this account
     * @return string|null
    */
    public function getGrantedByUpn(): ?string {
        return $this->grantedByUpn;
    }

    /**
     * Gets the grantedByUserId property value. The UserId of the user that granted consent for this account
     * @return string|null
    */
    public function getGrantedByUserId(): ?string {
        return $this->grantedByUserId;
    }

    /**
     * Gets the serviceDisplayName property value. The display name of the service work flow
     * @return string|null
    */
    public function getServiceDisplayName(): ?string {
        return $this->serviceDisplayName;
    }

    /**
     * Gets the termsUrl property value. The TermsUrl for the data sharing consent
     * @return string|null
    */
    public function getTermsUrl(): ?string {
        return $this->termsUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('grantDateTime', $this->grantDateTime);
        $writer->writeBooleanValue('granted', $this->granted);
        $writer->writeStringValue('grantedByUpn', $this->grantedByUpn);
        $writer->writeStringValue('grantedByUserId', $this->grantedByUserId);
        $writer->writeStringValue('serviceDisplayName', $this->serviceDisplayName);
        $writer->writeStringValue('termsUrl', $this->termsUrl);
    }

    /**
     * Sets the grantDateTime property value. The time consent was granted for this account
     *  @param DateTime|null $value Value to set for the grantDateTime property.
    */
    public function setGrantDateTime(?DateTime $value ): void {
        $this->grantDateTime = $value;
    }

    /**
     * Sets the granted property value. The granted state for the data sharing consent
     *  @param bool|null $value Value to set for the granted property.
    */
    public function setGranted(?bool $value ): void {
        $this->granted = $value;
    }

    /**
     * Sets the grantedByUpn property value. The Upn of the user that granted consent for this account
     *  @param string|null $value Value to set for the grantedByUpn property.
    */
    public function setGrantedByUpn(?string $value ): void {
        $this->grantedByUpn = $value;
    }

    /**
     * Sets the grantedByUserId property value. The UserId of the user that granted consent for this account
     *  @param string|null $value Value to set for the grantedByUserId property.
    */
    public function setGrantedByUserId(?string $value ): void {
        $this->grantedByUserId = $value;
    }

    /**
     * Sets the serviceDisplayName property value. The display name of the service work flow
     *  @param string|null $value Value to set for the serviceDisplayName property.
    */
    public function setServiceDisplayName(?string $value ): void {
        $this->serviceDisplayName = $value;
    }

    /**
     * Sets the termsUrl property value. The TermsUrl for the data sharing consent
     *  @param string|null $value Value to set for the termsUrl property.
    */
    public function setTermsUrl(?string $value ): void {
        $this->termsUrl = $value;
    }

}
