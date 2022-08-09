<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WebAccount extends ItemFacet implements Parsable 
{
    /**
     * @var string|null $description Contains the description the user has provided for the account on the service being referenced.
    */
    private ?string $description = null;
    
    /**
     * @var ServiceInformation|null $service The service property
    */
    private ?ServiceInformation $service = null;
    
    /**
     * @var string|null $statusMessage Contains a status message from the cloud service if provided or synchronized.
    */
    private ?string $statusMessage = null;
    
    /**
     * @var string|null $thumbnailUrl The thumbnailUrl property
    */
    private ?string $thumbnailUrl = null;
    
    /**
     * @var string|null $userId The user name  displayed for the webaccount.
    */
    private ?string $userId = null;
    
    /**
     * @var string|null $webUrl Contains a link to the user's profile on the cloud service if one exists.
    */
    private ?string $webUrl = null;
    
    /**
     * Instantiates a new WebAccount and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.webAccount');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WebAccount
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WebAccount {
        return new WebAccount();
    }

    /**
     * Gets the description property value. Contains the description the user has provided for the account on the service being referenced.
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'service' => function (ParseNode $n) use ($o) { $o->setService($n->getObjectValue(array(ServiceInformation::class, 'createFromDiscriminatorValue'))); },
            'statusMessage' => function (ParseNode $n) use ($o) { $o->setStatusMessage($n->getStringValue()); },
            'thumbnailUrl' => function (ParseNode $n) use ($o) { $o->setThumbnailUrl($n->getStringValue()); },
            'userId' => function (ParseNode $n) use ($o) { $o->setUserId($n->getStringValue()); },
            'webUrl' => function (ParseNode $n) use ($o) { $o->setWebUrl($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the service property value. The service property
     * @return ServiceInformation|null
    */
    public function getService(): ?ServiceInformation {
        return $this->service;
    }

    /**
     * Gets the statusMessage property value. Contains a status message from the cloud service if provided or synchronized.
     * @return string|null
    */
    public function getStatusMessage(): ?string {
        return $this->statusMessage;
    }

    /**
     * Gets the thumbnailUrl property value. The thumbnailUrl property
     * @return string|null
    */
    public function getThumbnailUrl(): ?string {
        return $this->thumbnailUrl;
    }

    /**
     * Gets the userId property value. The user name  displayed for the webaccount.
     * @return string|null
    */
    public function getUserId(): ?string {
        return $this->userId;
    }

    /**
     * Gets the webUrl property value. Contains a link to the user's profile on the cloud service if one exists.
     * @return string|null
    */
    public function getWebUrl(): ?string {
        return $this->webUrl;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('description', $this->description);
        $writer->writeObjectValue('service', $this->service);
        $writer->writeStringValue('statusMessage', $this->statusMessage);
        $writer->writeStringValue('thumbnailUrl', $this->thumbnailUrl);
        $writer->writeStringValue('userId', $this->userId);
        $writer->writeStringValue('webUrl', $this->webUrl);
    }

    /**
     * Sets the description property value. Contains the description the user has provided for the account on the service being referenced.
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the service property value. The service property
     *  @param ServiceInformation|null $value Value to set for the service property.
    */
    public function setService(?ServiceInformation $value ): void {
        $this->service = $value;
    }

    /**
     * Sets the statusMessage property value. Contains a status message from the cloud service if provided or synchronized.
     *  @param string|null $value Value to set for the statusMessage property.
    */
    public function setStatusMessage(?string $value ): void {
        $this->statusMessage = $value;
    }

    /**
     * Sets the thumbnailUrl property value. The thumbnailUrl property
     *  @param string|null $value Value to set for the thumbnailUrl property.
    */
    public function setThumbnailUrl(?string $value ): void {
        $this->thumbnailUrl = $value;
    }

    /**
     * Sets the userId property value. The user name  displayed for the webaccount.
     *  @param string|null $value Value to set for the userId property.
    */
    public function setUserId(?string $value ): void {
        $this->userId = $value;
    }

    /**
     * Sets the webUrl property value. Contains a link to the user's profile on the cloud service if one exists.
     *  @param string|null $value Value to set for the webUrl property.
    */
    public function setWebUrl(?string $value ): void {
        $this->webUrl = $value;
    }

}
