<?php

namespace Microsoft\Graph\Beta\Generated\DeviceAppManagement\MobileApps\Item\IosVppApp\RevokeUserLicense;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RevokeUserLicenseRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var bool|null $notifyManagedDevices  */
    private ?bool $notifyManagedDevices = null;
    
    /** @var string|null $userId  */
    private ?string $userId = null;
    
    /**
     * Instantiates a new revokeUserLicenseRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RevokeUserLicenseRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): RevokeUserLicenseRequestBody {
        return new RevokeUserLicenseRequestBody();
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
        return  [
            'notifyManagedDevices' => function (self $o, ParseNode $n) { $o->setNotifyManagedDevices($n->getBooleanValue()); },
            'userId' => function (self $o, ParseNode $n) { $o->setUserId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the notifyManagedDevices property value. 
     * @return bool|null
    */
    public function getNotifyManagedDevices(): ?bool {
        return $this->notifyManagedDevices;
    }

    /**
     * Gets the userId property value. 
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeBooleanValue('notifyManagedDevices', $this->notifyManagedDevices);
        $writer->writeStringValue('userId', $this->userId);
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
     * Sets the notifyManagedDevices property value. 
     *  @param bool|null $value Value to set for the notifyManagedDevices property.
    */
    public function setNotifyManagedDevices(?bool $value ): void {
        $this->notifyManagedDevices = $value;
    }

    /**
     * Sets the userId property value. 
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

}
