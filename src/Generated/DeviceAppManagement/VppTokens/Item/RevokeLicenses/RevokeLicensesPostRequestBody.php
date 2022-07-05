<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\VppTokens\Item\RevokeLicenses;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RevokeLicensesPostRequestBody implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var bool|null $notifyManagedDevices The notifyManagedDevices property
    */
    private ?bool $notifyManagedDevices = null;
    
    /**
     * @var bool|null $revokeUntrackedLicenses The revokeUntrackedLicenses property
    */
    private ?bool $revokeUntrackedLicenses = null;
    
    /**
     * Instantiates a new revokeLicensesPostRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RevokeLicensesPostRequestBody
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RevokeLicensesPostRequestBody {
        return new RevokeLicensesPostRequestBody();
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
            'notifyManagedDevices' => function (ParseNode $n) use ($o) { $o->setNotifyManagedDevices($n->getBooleanValue()); },
            'revokeUntrackedLicenses' => function (ParseNode $n) use ($o) { $o->setRevokeUntrackedLicenses($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the notifyManagedDevices property value. The notifyManagedDevices property
     * @return bool|null
    */
    public function getNotifyManagedDevices(): ?bool {
        return $this->notifyManagedDevices;
    }

    /**
     * Gets the revokeUntrackedLicenses property value. The revokeUntrackedLicenses property
     * @return bool|null
    */
    public function getRevokeUntrackedLicenses(): ?bool {
        return $this->revokeUntrackedLicenses;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('notifyManagedDevices', $this->notifyManagedDevices);
        $writer->writeBooleanValue('revokeUntrackedLicenses', $this->revokeUntrackedLicenses);
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
     * Sets the notifyManagedDevices property value. The notifyManagedDevices property
     *  @param bool|null $value Value to set for the notifyManagedDevices property.
    */
    public function setNotifyManagedDevices(?bool $value ): void {
        $this->notifyManagedDevices = $value;
    }

    /**
     * Sets the revokeUntrackedLicenses property value. The revokeUntrackedLicenses property
     *  @param bool|null $value Value to set for the revokeUntrackedLicenses property.
    */
    public function setRevokeUntrackedLicenses(?bool $value ): void {
        $this->revokeUntrackedLicenses = $value;
    }

}
