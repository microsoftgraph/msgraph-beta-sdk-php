<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class PayloadTypes implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $rawContent The notification content of a raw user notification that will be delivered to and consumed by the app client on all supported platforms (Windows, iOS, Android or WebPush) receiving this notification. At least one of Payload.RawContent or Payload.VisualContent needs to be valid for a POST Notification request.
    */
    private ?string $rawContent = null;
    
    /**
     * @var VisualProperties|null $visualContent The visual content of a visual user notification, which will be consumed by the notification platform on each supported platform (Windows, iOS and Android only) and rendered for the user. At least one of Payload.RawContent or Payload.VisualContent needs to be valid for a POST Notification request.
    */
    private ?VisualProperties $visualContent = null;
    
    /**
     * Instantiates a new payloadTypes and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return PayloadTypes
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): PayloadTypes {
        return new PayloadTypes();
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
            'rawContent' => function (ParseNode $n) use ($o) { $o->setRawContent($n->getStringValue()); },
            'visualContent' => function (ParseNode $n) use ($o) { $o->setVisualContent($n->getObjectValue(array(VisualProperties::class, 'createFromDiscriminatorValue'))); },
        ];
    }

    /**
     * Gets the rawContent property value. The notification content of a raw user notification that will be delivered to and consumed by the app client on all supported platforms (Windows, iOS, Android or WebPush) receiving this notification. At least one of Payload.RawContent or Payload.VisualContent needs to be valid for a POST Notification request.
     * @return string|null
    */
    public function getRawContent(): ?string {
        return $this->rawContent;
    }

    /**
     * Gets the visualContent property value. The visual content of a visual user notification, which will be consumed by the notification platform on each supported platform (Windows, iOS and Android only) and rendered for the user. At least one of Payload.RawContent or Payload.VisualContent needs to be valid for a POST Notification request.
     * @return VisualProperties|null
    */
    public function getVisualContent(): ?VisualProperties {
        return $this->visualContent;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('rawContent', $this->rawContent);
        $writer->writeObjectValue('visualContent', $this->visualContent);
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
     * Sets the rawContent property value. The notification content of a raw user notification that will be delivered to and consumed by the app client on all supported platforms (Windows, iOS, Android or WebPush) receiving this notification. At least one of Payload.RawContent or Payload.VisualContent needs to be valid for a POST Notification request.
     *  @param string|null $value Value to set for the rawContent property.
    */
    public function setRawContent(?string $value ): void {
        $this->rawContent = $value;
    }

    /**
     * Sets the visualContent property value. The visual content of a visual user notification, which will be consumed by the notification platform on each supported platform (Windows, iOS and Android only) and rendered for the user. At least one of Payload.RawContent or Payload.VisualContent needs to be valid for a POST Notification request.
     *  @param VisualProperties|null $value Value to set for the visualContent property.
    */
    public function setVisualContent(?VisualProperties $value ): void {
        $this->visualContent = $value;
    }

}
