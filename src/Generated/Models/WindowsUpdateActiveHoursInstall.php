<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\Time;

class WindowsUpdateActiveHoursInstall extends WindowsUpdateInstallScheduleType implements AdditionalDataHolder, Parsable 
{
    /**
     * @var Time|null $activeHoursEnd Active Hours End
    */
    private ?Time $activeHoursEnd = null;
    
    /**
     * @var Time|null $activeHoursStart Active Hours Start
    */
    private ?Time $activeHoursStart = null;
    
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * Instantiates a new WindowsUpdateActiveHoursInstall and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsUpdateActiveHoursInstall
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsUpdateActiveHoursInstall {
        return new WindowsUpdateActiveHoursInstall();
    }

    /**
     * Gets the activeHoursEnd property value. Active Hours End
     * @return Time|null
    */
    public function getActiveHoursEnd(): ?Time {
        return $this->activeHoursEnd;
    }

    /**
     * Gets the activeHoursStart property value. Active Hours Start
     * @return Time|null
    */
    public function getActiveHoursStart(): ?Time {
        return $this->activeHoursStart;
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
        return array_merge(parent::getFieldDeserializers(), [
            'activeHoursEnd' => function (ParseNode $n) use ($o) { $o->setActiveHoursEnd($n->getTimeValue()); },
            'activeHoursStart' => function (ParseNode $n) use ($o) { $o->setActiveHoursStart($n->getTimeValue()); },
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeTimeValue('activeHoursEnd', $this->activeHoursEnd);
        $writer->writeTimeValue('activeHoursStart', $this->activeHoursStart);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the activeHoursEnd property value. Active Hours End
     *  @param Time|null $value Value to set for the activeHoursEnd property.
    */
    public function setActiveHoursEnd(?Time $value ): void {
        $this->activeHoursEnd = $value;
    }

    /**
     * Sets the activeHoursStart property value. Active Hours Start
     *  @param Time|null $value Value to set for the activeHoursStart property.
    */
    public function setActiveHoursStart(?Time $value ): void {
        $this->activeHoursStart = $value;
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

}
