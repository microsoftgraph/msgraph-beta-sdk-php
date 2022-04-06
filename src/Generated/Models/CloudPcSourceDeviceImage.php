<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CloudPcSourceDeviceImage implements AdditionalDataHolder, Parsable 
{
    /** @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well. */
    private array $additionalData;
    
    /** @var string|null $displayName The display name for the source image. */
    private ?string $displayName = null;
    
    /** @var string|null $id The ID of the source image. */
    private ?string $id = null;
    
    /** @var string|null $subscriptionDisplayName The display name of subscription that hosts the source image. */
    private ?string $subscriptionDisplayName = null;
    
    /** @var string|null $subscriptionId The ID of subscription that hosts the source image. */
    private ?string $subscriptionId = null;
    
    /**
     * Instantiates a new cloudPcSourceDeviceImage and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CloudPcSourceDeviceImage
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): CloudPcSourceDeviceImage {
        return new CloudPcSourceDeviceImage();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the displayName property value. The display name for the source image.
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return  [
            'displayName' => function (self $o, ParseNode $n) { $o->setDisplayName($n->getStringValue()); },
            'id' => function (self $o, ParseNode $n) { $o->setId($n->getStringValue()); },
            'subscriptionDisplayName' => function (self $o, ParseNode $n) { $o->setSubscriptionDisplayName($n->getStringValue()); },
            'subscriptionId' => function (self $o, ParseNode $n) { $o->setSubscriptionId($n->getStringValue()); },
        ];
    }

    /**
     * Gets the id property value. The ID of the source image.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the subscriptionDisplayName property value. The display name of subscription that hosts the source image.
     * @return string|null
    */
    public function getSubscriptionDisplayName(): ?string {
        return $this->subscriptionDisplayName;
    }

    /**
     * Gets the subscriptionId property value. The ID of subscription that hosts the source image.
     * @return string|null
    */
    public function getSubscriptionId(): ?string {
        return $this->subscriptionId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('subscriptionDisplayName', $this->subscriptionDisplayName);
        $writer->writeStringValue('subscriptionId', $this->subscriptionId);
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
     * Sets the displayName property value. The display name for the source image.
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the id property value. The ID of the source image.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the subscriptionDisplayName property value. The display name of subscription that hosts the source image.
     *  @param string|null $value Value to set for the subscriptionDisplayName property.
    */
    public function setSubscriptionDisplayName(?string $value ): void {
        $this->subscriptionDisplayName = $value;
    }

    /**
     * Sets the subscriptionId property value. The ID of subscription that hosts the source image.
     *  @param string|null $value Value to set for the subscriptionId property.
    */
    public function setSubscriptionId(?string $value ): void {
        $this->subscriptionId = $value;
    }

}
