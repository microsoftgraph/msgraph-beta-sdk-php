<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DaylightTimeZoneOffset extends StandardTimeZoneOffset implements Parsable 
{
    /**
     * @var int|null $daylightBias The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
    */
    private ?int $daylightBias = null;
    
    /**
     * Instantiates a new DaylightTimeZoneOffset and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.daylightTimeZoneOffset');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DaylightTimeZoneOffset
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DaylightTimeZoneOffset {
        return new DaylightTimeZoneOffset();
    }

    /**
     * Gets the daylightBias property value. The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
     * @return int|null
    */
    public function getDaylightBias(): ?int {
        return $this->daylightBias;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'daylightBias' => function (ParseNode $n) use ($o) { $o->setDaylightBias($n->getIntegerValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('daylightBias', $this->daylightBias);
    }

    /**
     * Sets the daylightBias property value. The time offset from Coordinated Universal Time (UTC) for daylight saving time. This value is in minutes.
     *  @param int|null $value Value to set for the daylightBias property.
    */
    public function setDaylightBias(?int $value ): void {
        $this->daylightBias = $value;
    }

}
