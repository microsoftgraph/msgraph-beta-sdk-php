<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SigningCertificateUpdateStatus implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $certificateUpdateResult The certificateUpdateResult property */
    private ?string $certificateUpdateResult = null;
    
    /** @var DateTime|null $lastRunDateTime The lastRunDateTime property */
    private ?DateTime $lastRunDateTime = null;
    
    /**
     * Instantiates a new signingCertificateUpdateStatus and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SigningCertificateUpdateStatus
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SigningCertificateUpdateStatus {
        return new SigningCertificateUpdateStatus();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the certificateUpdateResult property value. The certificateUpdateResult property
     * @return string|null
    */
    public function getCertificateUpdateResult(): ?string {
        return $this->certificateUpdateResult;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'certificateUpdateResult' => function (self $o, ParseNode $n) { $o->setCertificateUpdateResult($n->getStringValue()); },
            'lastRunDateTime' => function (self $o, ParseNode $n) { $o->setLastRunDateTime($n->getDateTimeValue()); },
        ];
    }

    /**
     * Gets the lastRunDateTime property value. The lastRunDateTime property
     * @return DateTime|null
    */
    public function getLastRunDateTime(): ?DateTime {
        return $this->lastRunDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('certificateUpdateResult', $this->certificateUpdateResult);
        $writer->writeDateTimeValue('lastRunDateTime', $this->lastRunDateTime);
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
     * Sets the certificateUpdateResult property value. The certificateUpdateResult property
     *  @param string|null $value Value to set for the certificateUpdateResult property.
    */
    public function setCertificateUpdateResult(?string $value ): void {
        $this->certificateUpdateResult = $value;
    }

    /**
     * Sets the lastRunDateTime property value. The lastRunDateTime property
     *  @param DateTime|null $value Value to set for the lastRunDateTime property.
    */
    public function setLastRunDateTime(?DateTime $value ): void {
        $this->lastRunDateTime = $value;
    }

}
