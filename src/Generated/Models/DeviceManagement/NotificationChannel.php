<?php

namespace Microsoft\Graph\Beta\Generated\Models\DeviceManagement;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class NotificationChannel implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var NotificationChannelType|null $notificationChannelType The type of the notification channel. The possible values are: portal, email, phoneCall, sms, unknownFutureValue.
    */
    private ?NotificationChannelType $notificationChannelType = null;
    
    /**
     * @var array<NotificationReceiver>|null $notificationReceivers Information about the notification receivers, such as locale and contact information. For example, en-us for locale and serena.davis@contoso.com for contact information.
    */
    private ?array $notificationReceivers = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var array<string>|null $receivers The contact information about the notification receivers, such as email addresses. For portal notifications, receivers can be left blank. For email notifications, receivers consists of email addresses such as serena.davis@contoso.com.
    */
    private ?array $receivers = null;
    
    /**
     * Instantiates a new notificationChannel and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.deviceManagement.notificationChannel');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return NotificationChannel
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): NotificationChannel {
        return new NotificationChannel();
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
            'notificationChannelType' => fn(ParseNode $n) => $o->setNotificationChannelType($n->getEnumValue(NotificationChannelType::class)),
            'notificationReceivers' => fn(ParseNode $n) => $o->setNotificationReceivers($n->getCollectionOfObjectValues([NotificationReceiver::class, 'createFromDiscriminatorValue'])),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'receivers' => fn(ParseNode $n) => $o->setReceivers($n->getCollectionOfPrimitiveValues()),
        ];
    }

    /**
     * Gets the notificationChannelType property value. The type of the notification channel. The possible values are: portal, email, phoneCall, sms, unknownFutureValue.
     * @return NotificationChannelType|null
    */
    public function getNotificationChannelType(): ?NotificationChannelType {
        return $this->notificationChannelType;
    }

    /**
     * Gets the notificationReceivers property value. Information about the notification receivers, such as locale and contact information. For example, en-us for locale and serena.davis@contoso.com for contact information.
     * @return array<NotificationReceiver>|null
    */
    public function getNotificationReceivers(): ?array {
        return $this->notificationReceivers;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the receivers property value. The contact information about the notification receivers, such as email addresses. For portal notifications, receivers can be left blank. For email notifications, receivers consists of email addresses such as serena.davis@contoso.com.
     * @return array<string>|null
    */
    public function getReceivers(): ?array {
        return $this->receivers;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeEnumValue('notificationChannelType', $this->notificationChannelType);
        $writer->writeCollectionOfObjectValues('notificationReceivers', $this->notificationReceivers);
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeCollectionOfPrimitiveValues('receivers', $this->receivers);
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
     * Sets the notificationChannelType property value. The type of the notification channel. The possible values are: portal, email, phoneCall, sms, unknownFutureValue.
     *  @param NotificationChannelType|null $value Value to set for the notificationChannelType property.
    */
    public function setNotificationChannelType(?NotificationChannelType $value ): void {
        $this->notificationChannelType = $value;
    }

    /**
     * Sets the notificationReceivers property value. Information about the notification receivers, such as locale and contact information. For example, en-us for locale and serena.davis@contoso.com for contact information.
     *  @param array<NotificationReceiver>|null $value Value to set for the notificationReceivers property.
    */
    public function setNotificationReceivers(?array $value ): void {
        $this->notificationReceivers = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the receivers property value. The contact information about the notification receivers, such as email addresses. For portal notifications, receivers can be left blank. For email notifications, receivers consists of email addresses such as serena.davis@contoso.com.
     *  @param array<string>|null $value Value to set for the receivers property.
    */
    public function setReceivers(?array $value ): void {
        $this->receivers = $value;
    }

}
