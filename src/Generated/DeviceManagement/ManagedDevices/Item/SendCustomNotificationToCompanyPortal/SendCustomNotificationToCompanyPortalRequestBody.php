<?php

namespace Microsoft\Graph\Beta\Generated\DeviceManagement\ManagedDevices\Item\SendCustomNotificationToCompanyPortal;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SendCustomNotificationToCompanyPortalRequestBody implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $notificationBody The notificationBody property */
    private ?string $notificationBody = null;
    
    /** @var string|null $notificationTitle The notificationTitle property */
    private ?string $notificationTitle = null;
    
    /**
     * Instantiates a new sendCustomNotificationToCompanyPortalRequestBody and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SendCustomNotificationToCompanyPortalRequestBody
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): SendCustomNotificationToCompanyPortalRequestBody {
        return new SendCustomNotificationToCompanyPortalRequestBody();
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
            'notificationBody' => function (self $o, ParseNode $n) { $o->setNotificationBody($n->getStringValue()); },
            'notificationTitle' => function (self $o, ParseNode $n) { $o->setNotificationTitle($n->getStringValue()); },
        ];
    }

    /**
     * Gets the notificationBody property value. The notificationBody property
     * @return string|null
    */
    public function getNotificationBody(): ?string {
        return $this->notificationBody;
    }

    /**
     * Gets the notificationTitle property value. The notificationTitle property
     * @return string|null
    */
    public function getNotificationTitle(): ?string {
        return $this->notificationTitle;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('notificationBody', $this->notificationBody);
        $writer->writeStringValue('notificationTitle', $this->notificationTitle);
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
     * Sets the notificationBody property value. The notificationBody property
     *  @param string|null $value Value to set for the notificationBody property.
    */
    public function setNotificationBody(?string $value ): void {
        $this->notificationBody = $value;
    }

    /**
     * Sets the notificationTitle property value. The notificationTitle property
     *  @param string|null $value Value to set for the notificationTitle property.
    */
    public function setNotificationTitle(?string $value ): void {
        $this->notificationTitle = $value;
    }

}
