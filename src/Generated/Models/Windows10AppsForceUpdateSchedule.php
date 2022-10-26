<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class Windows10AppsForceUpdateSchedule implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $additionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $odataType The OdataType property
    */
    private ?string $odataType = null;
    
    /**
     * @var Windows10AppsUpdateRecurrence|null $recurrence Possible values for App update on Windows10 recurrence.
    */
    private ?Windows10AppsUpdateRecurrence $recurrence = null;
    
    /**
     * @var bool|null $runImmediatelyIfAfterStartDateTime If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
    */
    private ?bool $runImmediatelyIfAfterStartDateTime = null;
    
    /**
     * @var DateTime|null $startDateTime The start time for the force restart.
    */
    private ?DateTime $startDateTime = null;
    
    /**
     * Instantiates a new windows10AppsForceUpdateSchedule and sets the default values.
    */
    public function __construct() {
        $this->setAdditionalData([]);
        $this->setOdataType('#microsoft.graph.windows10AppsForceUpdateSchedule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Windows10AppsForceUpdateSchedule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Windows10AppsForceUpdateSchedule {
        return new Windows10AppsForceUpdateSchedule();
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
            '@odata.type' => fn(ParseNode $n) => $o->setOdataType($n->getStringValue()),
            'recurrence' => fn(ParseNode $n) => $o->setRecurrence($n->getEnumValue(Windows10AppsUpdateRecurrence::class)),
            'runImmediatelyIfAfterStartDateTime' => fn(ParseNode $n) => $o->setRunImmediatelyIfAfterStartDateTime($n->getBooleanValue()),
            'startDateTime' => fn(ParseNode $n) => $o->setStartDateTime($n->getDateTimeValue()),
        ];
    }

    /**
     * Gets the @odata.type property value. The OdataType property
     * @return string|null
    */
    public function getOdataType(): ?string {
        return $this->odataType;
    }

    /**
     * Gets the recurrence property value. Possible values for App update on Windows10 recurrence.
     * @return Windows10AppsUpdateRecurrence|null
    */
    public function getRecurrence(): ?Windows10AppsUpdateRecurrence {
        return $this->recurrence;
    }

    /**
     * Gets the runImmediatelyIfAfterStartDateTime property value. If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
     * @return bool|null
    */
    public function getRunImmediatelyIfAfterStartDateTime(): ?bool {
        return $this->runImmediatelyIfAfterStartDateTime;
    }

    /**
     * Gets the startDateTime property value. The start time for the force restart.
     * @return DateTime|null
    */
    public function getStartDateTime(): ?DateTime {
        return $this->startDateTime;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('@odata.type', $this->odataType);
        $writer->writeEnumValue('recurrence', $this->recurrence);
        $writer->writeBooleanValue('runImmediatelyIfAfterStartDateTime', $this->runImmediatelyIfAfterStartDateTime);
        $writer->writeDateTimeValue('startDateTime', $this->startDateTime);
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
     * Sets the @odata.type property value. The OdataType property
     *  @param string|null $value Value to set for the OdataType property.
    */
    public function setOdataType(?string $value ): void {
        $this->odataType = $value;
    }

    /**
     * Sets the recurrence property value. Possible values for App update on Windows10 recurrence.
     *  @param Windows10AppsUpdateRecurrence|null $value Value to set for the recurrence property.
    */
    public function setRecurrence(?Windows10AppsUpdateRecurrence $value ): void {
        $this->recurrence = $value;
    }

    /**
     * Sets the runImmediatelyIfAfterStartDateTime property value. If true, runs the task immediately if StartDateTime is in the past, else, runs at the next recurrence.
     *  @param bool|null $value Value to set for the runImmediatelyIfAfterStartDateTime property.
    */
    public function setRunImmediatelyIfAfterStartDateTime(?bool $value ): void {
        $this->runImmediatelyIfAfterStartDateTime = $value;
    }

    /**
     * Sets the startDateTime property value. The start time for the force restart.
     *  @param DateTime|null $value Value to set for the startDateTime property.
    */
    public function setStartDateTime(?DateTime $value ): void {
        $this->startDateTime = $value;
    }

}
