<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class OrganizationalMessageInsights implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $clicks The number of times this message was clicked on
    */
    private ?int $clicks = null;
    
    /**
     * @var int|null $dismisses The number of times this message was dismissed by a user. This may not be collected for some surfaces and will be null
    */
    private ?int $dismisses = null;
    
    /**
     * @var int|null $impressions The number of times this message was shown to all clients
    */
    private ?int $impressions = null;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * Instantiates a new organizationalMessageInsights and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.organizationalMessageInsights');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OrganizationalMessageInsights
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OrganizationalMessageInsights {
        return new OrganizationalMessageInsights();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the clicks property value. The number of times this message was clicked on
     * @return int|null
    */
    public function getClicks(): ?int {
        return $this->clicks;
    }

    /**
     * Gets the dismisses property value. The number of times this message was dismissed by a user. This may not be collected for some surfaces and will be null
     * @return int|null
    */
    public function getDismisses(): ?int {
        return $this->dismisses;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'clicks' => fn(ParseNode $n) => $o->setClicks($n->getIntegerValue()),
            'dismisses' => fn(ParseNode $n) => $o->setDismisses($n->getIntegerValue()),
            'impressions' => fn(ParseNode $n) => $o->setImpressions($n->getIntegerValue()),
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
        ];
    }

    /**
     * Gets the impressions property value. The number of times this message was shown to all clients
     * @return int|null
    */
    public function getImpressions(): ?int {
        return $this->impressions;
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('clicks', $this->clicks);
        $writer->writeIntegerValue('dismisses', $this->dismisses);
        $writer->writeIntegerValue('impressions', $this->impressions);
        $writer->writeStringValue('@odata.type', $this->odataType);
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
     * Sets the clicks property value. The number of times this message was clicked on
     *  @param int|null $value Value to set for the clicks property.
    */
    public function setClicks(?int $value ): void {
        $this->clicks = $value;
    }

    /**
     * Sets the dismisses property value. The number of times this message was dismissed by a user. This may not be collected for some surfaces and will be null
     *  @param int|null $value Value to set for the dismisses property.
    */
    public function setDismisses(?int $value ): void {
        $this->dismisses = $value;
    }

    /**
     * Sets the impressions property value. The number of times this message was shown to all clients
     *  @param int|null $value Value to set for the impressions property.
    */
    public function setImpressions(?int $value ): void {
        $this->impressions = $value;
    }

    /**
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

}
