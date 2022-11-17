<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SynchronizationJob extends Entity implements Parsable 
{
    /**
     * Instantiates a new synchronizationJob and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.synchronizationJob');
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
            'schedule' => fn(ParseNode $n) => $o->setSchedule($n->getObjectValue([SynchronizationSchedule::class, 'createFromDiscriminatorValue'])),
            'schema' => fn(ParseNode $n) => $o->setSchema($n->getObjectValue([SynchronizationSchema::class, 'createFromDiscriminatorValue'])),
            'status' => fn(ParseNode $n) => $o->setStatus($n->getObjectValue([SynchronizationStatus::class, 'createFromDiscriminatorValue'])),
            'synchronizationJobSettings' => fn(ParseNode $n) => $o->setSynchronizationJobSettings($n->getCollectionOfObjectValues([KeyValuePair::class, 'createFromDiscriminatorValue'])),
            'templateId' => fn(ParseNode $n) => $o->setTemplateId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the schedule property value. Schedule used to run the job. Read-only.
     * @return SynchronizationSchedule|null
    */
    public function getSchedule(): ?SynchronizationSchedule {
        return $this->getBackingStore()->get('schedule');
    }

    /**
     * Gets the schema property value. The synchronization schema configured for the job.
     * @return SynchronizationSchema|null
    */
    public function getSchema(): ?SynchronizationSchema {
        return $this->getBackingStore()->get('schema');
    }

    /**
     * Gets the status property value. Status of the job, which includes when the job was last run, current job state, and errors.
     * @return SynchronizationStatus|null
    */
    public function getStatus(): ?SynchronizationStatus {
        return $this->getBackingStore()->get('status');
    }

    /**
     * Gets the synchronizationJobSettings property value. Settings associated with the job. Some settings are inherited from the template.
     * @return array<KeyValuePair>|null
    */
    public function getSynchronizationJobSettings(): ?array {
        return $this->getBackingStore()->get('synchronizationJobSettings');
    }

    /**
     * Gets the templateId property value. Identifier of the synchronization template this job is based on.
     * @return string|null
    */
    public function getTemplateId(): ?string {
        return $this->getBackingStore()->get('templateId');
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('schedule', $this->getSchedule());
        $writer->writeObjectValue('schema', $this->getSchema());
        $writer->writeObjectValue('status', $this->getStatus());
        $writer->writeCollectionOfObjectValues('synchronizationJobSettings', $this->getSynchronizationJobSettings());
        $writer->writeStringValue('templateId', $this->getTemplateId());
    }

    /**
     * Sets the schedule property value. Schedule used to run the job. Read-only.
     *  @param SynchronizationSchedule|null $value Value to set for the schedule property.
    */
    public function setSchedule(?SynchronizationSchedule $value): void {
        $this->getBackingStore()->set('schedule', $value);
    }

    /**
     * Sets the schema property value. The synchronization schema configured for the job.
     *  @param SynchronizationSchema|null $value Value to set for the schema property.
    */
    public function setSchema(?SynchronizationSchema $value): void {
        $this->getBackingStore()->set('schema', $value);
    }

    /**
     * Sets the status property value. Status of the job, which includes when the job was last run, current job state, and errors.
     *  @param SynchronizationStatus|null $value Value to set for the status property.
    */
    public function setStatus(?SynchronizationStatus $value): void {
        $this->getBackingStore()->set('status', $value);
    }

    /**
     * Sets the synchronizationJobSettings property value. Settings associated with the job. Some settings are inherited from the template.
     *  @param array<KeyValuePair>|null $value Value to set for the synchronizationJobSettings property.
    */
    public function setSynchronizationJobSettings(?array $value): void {
        $this->getBackingStore()->set('synchronizationJobSettings', $value);
    }

    /**
     * Sets the templateId property value. Identifier of the synchronization template this job is based on.
     *  @param string|null $value Value to set for the templateId property.
    */
    public function setTemplateId(?string $value): void {
        $this->getBackingStore()->set('templateId', $value);
    }

}
