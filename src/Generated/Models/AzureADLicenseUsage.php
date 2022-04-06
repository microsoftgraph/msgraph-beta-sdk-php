<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AzureADLicenseUsage extends Entity 
{
    /** @var array<LicenseInfoDetail>|null $licenseInfoDetails The licenseInfoDetails property */
    private ?array $licenseInfoDetails = null;
    
    /** @var DateTime|null $snapshotDateTime The snapshotDateTime property */
    private ?DateTime $snapshotDateTime = null;
    
    /**
     * Instantiates a new azureADLicenseUsage and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AzureADLicenseUsage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): AzureADLicenseUsage {
        return new AzureADLicenseUsage();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'licenseInfoDetails' => function (self $o, ParseNode $n) { $o->setLicenseInfoDetails($n->getCollectionOfObjectValues(LicenseInfoDetail::class)); },
            'snapshotDateTime' => function (self $o, ParseNode $n) { $o->setSnapshotDateTime($n->getDateTimeValue()); },
        ]);
    }

    /**
     * Gets the licenseInfoDetails property value. The licenseInfoDetails property
     * @return array<LicenseInfoDetail>|null
    */
    public function getLicenseInfoDetails(): ?array {
        return $this->licenseInfoDetails;
    }

    /**
     * Gets the snapshotDateTime property value. The snapshotDateTime property
     * @return DateTime|null
    */
    public function getSnapshotDateTime(): ?DateTime {
        return $this->snapshotDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('licenseInfoDetails', $this->licenseInfoDetails);
        $writer->writeDateTimeValue('snapshotDateTime', $this->snapshotDateTime);
    }

    /**
     * Sets the licenseInfoDetails property value. The licenseInfoDetails property
     *  @param array<LicenseInfoDetail>|null $value Value to set for the licenseInfoDetails property.
    */
    public function setLicenseInfoDetails(?array $value ): void {
        $this->licenseInfoDetails = $value;
    }

    /**
     * Sets the snapshotDateTime property value. The snapshotDateTime property
     *  @param DateTime|null $value Value to set for the snapshotDateTime property.
    */
    public function setSnapshotDateTime(?DateTime $value ): void {
        $this->snapshotDateTime = $value;
    }

}
