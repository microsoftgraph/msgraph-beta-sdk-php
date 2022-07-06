<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationJob extends Entity implements Parsable 
{
    /**
     * @var SynchronizationSchedule|null $schedule Schedule used to run the job. Read-only.
    */
    private ?SynchronizationSchedule $schedule = null;
    
    /**
     * @var SynchronizationSchema|null $schema The synchronization schema configured for the job.
    */
    private ?SynchronizationSchema $schema = null;
    
    /**
     * @var SynchronizationStatus|null $status Status of the job, which includes when the job was last run, current job state, and errors.
    */
    private ?SynchronizationStatus $status = null;
    
    /**
     * @var array<KeyValuePair>|null $synchronizationJobSettings Settings associated with the job. Some settings are inherited from the template.
    */
    private ?array $synchronizationJobSettings = null;
    
    /**
     * @var string|null $templateId Identifier of the synchronization template this job is based on.
    */
    private ?string $templateId = null;
    
    /**
     * Instantiates a new synchronizationJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SynchronizationJob
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SynchronizationJob {
        return new SynchronizationJob();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'schedule' => function (ParseNode $n) use ($o) { $o->setSchedule($n->getObjectValue(array(SynchronizationSchedule::class, 'createFromDiscriminatorValue'))); },
            'schema' => function (ParseNode $n) use ($o) { $o->setSchema($n->getObjectValue(array(SynchronizationSchema::class, 'createFromDiscriminatorValue'))); },
            'status' => function (ParseNode $n) use ($o) { $o->setStatus($n->getObjectValue(array(SynchronizationStatus::class, 'createFromDiscriminatorValue'))); },
            'synchronizationJobSettings' => function (ParseNode $n) use ($o) { $o->setSynchronizationJobSettings($n->getCollectionOfObjectValues(array(KeyValuePair::class, 'createFromDiscriminatorValue'))); },
            'templateId' => function (ParseNode $n) use ($o) { $o->setTemplateId($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the schedule property value. Schedule used to run the job. Read-only.
     * @return SynchronizationSchedule|null
    */
    public function getSchedule(): ?SynchronizationSchedule {
        return $this->schedule;
    }

    /**
     * Gets the schema property value. The synchronization schema configured for the job.
     * @return SynchronizationSchema|null
    */
    public function getSchema(): ?SynchronizationSchema {
        return $this->schema;
    }

    /**
     * Gets the status property value. Status of the job, which includes when the job was last run, current job state, and errors.
     * @return SynchronizationStatus|null
    */
    public function getStatus(): ?SynchronizationStatus {
        return $this->status;
    }

    /**
     * Gets the synchronizationJobSettings property value. Settings associated with the job. Some settings are inherited from the template.
     * @return array<KeyValuePair>|null
    */
    public function getSynchronizationJobSettings(): ?array {
        return $this->synchronizationJobSettings;
    }

    /**
     * Gets the templateId property value. Identifier of the synchronization template this job is based on.
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->templateId;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('schedule', $this->schedule);
        $writer->writeObjectValue('schema', $this->schema);
        $writer->writeObjectValue('status', $this->status);
        $writer->writeCollectionOfObjectValues('synchronizationJobSettings', $this->synchronizationJobSettings);
        $writer->writeStringValue('templateId', $this->templateId);
    }

    /**
     * Sets the schedule property value. Schedule used to run the job. Read-only.
     *  @param SynchronizationSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?SynchronizationSchedule $value ): void {
        $this->schedule = $value;
    }

    /**
     * Sets the schema property value. The synchronization schema configured for the job.
     *  @param SynchronizationSchema|null $value Value to set for the schema property.
    */
    public function setSchema(?SynchronizationSchema $value ): void {
        $this->schema = $value;
    }

    /**
     * Sets the status property value. Status of the job, which includes when the job was last run, current job state, and errors.
     *  @param SynchronizationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SynchronizationStatus $value ): void {
        $this->status = $value;
    }

    /**
     * Sets the synchronizationJobSettings property value. Settings associated with the job. Some settings are inherited from the template.
     *  @param array<KeyValuePair>|null $value Value to set for the synchronizationJobSettings property.
    */
    public function setSynchronizationJobSettings(?array $value ): void {
        $this->synchronizationJobSettings = $value;
    }

    /**
     * Sets the templateId property value. Identifier of the synchronization template this job is based on.
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value ): void {
        $this->templateId = $value;
    }

}
