<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class SharePointMigrationJobProgressEvent extends SharePointMigrationEvent implements Parsable 
{
    /**
     * Instantiates a new SharePointMigrationJobProgressEvent and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SharePointMigrationJobProgressEvent
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SharePointMigrationJobProgressEvent {
        return new SharePointMigrationJobProgressEvent();
    }

    /**
     * Gets the bytesProcessed property value. The bytesProcessed property
     * @return int|null
    */
    public function getBytesProcessed(): ?int {
        $val = $this->getBackingStore()->get('bytesProcessed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bytesProcessed'");
    }

    /**
     * Gets the bytesProcessedOnlyCurrentVersion property value. The bytesProcessedOnlyCurrentVersion property
     * @return int|null
    */
    public function getBytesProcessedOnlyCurrentVersion(): ?int {
        $val = $this->getBackingStore()->get('bytesProcessedOnlyCurrentVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'bytesProcessedOnlyCurrentVersion'");
    }

    /**
     * Gets the cpuDurationMs property value. The cpuDurationMs property
     * @return int|null
    */
    public function getCpuDurationMs(): ?int {
        $val = $this->getBackingStore()->get('cpuDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cpuDurationMs'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'bytesProcessed' => fn(ParseNode $n) => $o->setBytesProcessed($n->getIntegerValue()),
            'bytesProcessedOnlyCurrentVersion' => fn(ParseNode $n) => $o->setBytesProcessedOnlyCurrentVersion($n->getIntegerValue()),
            'cpuDurationMs' => fn(ParseNode $n) => $o->setCpuDurationMs($n->getIntegerValue()),
            'filesProcessed' => fn(ParseNode $n) => $o->setFilesProcessed($n->getIntegerValue()),
            'filesProcessedOnlyCurrentVersion' => fn(ParseNode $n) => $o->setFilesProcessedOnlyCurrentVersion($n->getIntegerValue()),
            'isCompleted' => fn(ParseNode $n) => $o->setIsCompleted($n->getBooleanValue()),
            'lastProcessedObjectId' => fn(ParseNode $n) => $o->setLastProcessedObjectId($n->getStringValue()),
            'objectsProcessed' => fn(ParseNode $n) => $o->setObjectsProcessed($n->getIntegerValue()),
            'sqlDurationMs' => fn(ParseNode $n) => $o->setSqlDurationMs($n->getIntegerValue()),
            'sqlQueryCount' => fn(ParseNode $n) => $o->setSqlQueryCount($n->getIntegerValue()),
            'totalDurationMs' => fn(ParseNode $n) => $o->setTotalDurationMs($n->getIntegerValue()),
            'totalErrors' => fn(ParseNode $n) => $o->setTotalErrors($n->getIntegerValue()),
            'totalExpectedBytes' => fn(ParseNode $n) => $o->setTotalExpectedBytes($n->getIntegerValue()),
            'totalExpectedObjects' => fn(ParseNode $n) => $o->setTotalExpectedObjects($n->getIntegerValue()),
            'totalRetryCount' => fn(ParseNode $n) => $o->setTotalRetryCount($n->getIntegerValue()),
            'totalWarnings' => fn(ParseNode $n) => $o->setTotalWarnings($n->getIntegerValue()),
            'waitTimeOnSqlThrottlingMs' => fn(ParseNode $n) => $o->setWaitTimeOnSqlThrottlingMs($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the filesProcessed property value. The filesProcessed property
     * @return int|null
    */
    public function getFilesProcessed(): ?int {
        $val = $this->getBackingStore()->get('filesProcessed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filesProcessed'");
    }

    /**
     * Gets the filesProcessedOnlyCurrentVersion property value. The filesProcessedOnlyCurrentVersion property
     * @return int|null
    */
    public function getFilesProcessedOnlyCurrentVersion(): ?int {
        $val = $this->getBackingStore()->get('filesProcessedOnlyCurrentVersion');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'filesProcessedOnlyCurrentVersion'");
    }

    /**
     * Gets the isCompleted property value. The isCompleted property
     * @return bool|null
    */
    public function getIsCompleted(): ?bool {
        $val = $this->getBackingStore()->get('isCompleted');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isCompleted'");
    }

    /**
     * Gets the lastProcessedObjectId property value. The lastProcessedObjectId property
     * @return string|null
    */
    public function getLastProcessedObjectId(): ?string {
        $val = $this->getBackingStore()->get('lastProcessedObjectId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'lastProcessedObjectId'");
    }

    /**
     * Gets the objectsProcessed property value. The objectsProcessed property
     * @return int|null
    */
    public function getObjectsProcessed(): ?int {
        $val = $this->getBackingStore()->get('objectsProcessed');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'objectsProcessed'");
    }

    /**
     * Gets the sqlDurationMs property value. The sqlDurationMs property
     * @return int|null
    */
    public function getSqlDurationMs(): ?int {
        $val = $this->getBackingStore()->get('sqlDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sqlDurationMs'");
    }

    /**
     * Gets the sqlQueryCount property value. The sqlQueryCount property
     * @return int|null
    */
    public function getSqlQueryCount(): ?int {
        $val = $this->getBackingStore()->get('sqlQueryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'sqlQueryCount'");
    }

    /**
     * Gets the totalDurationMs property value. The totalDurationMs property
     * @return int|null
    */
    public function getTotalDurationMs(): ?int {
        $val = $this->getBackingStore()->get('totalDurationMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalDurationMs'");
    }

    /**
     * Gets the totalErrors property value. The totalErrors property
     * @return int|null
    */
    public function getTotalErrors(): ?int {
        $val = $this->getBackingStore()->get('totalErrors');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalErrors'");
    }

    /**
     * Gets the totalExpectedBytes property value. The totalExpectedBytes property
     * @return int|null
    */
    public function getTotalExpectedBytes(): ?int {
        $val = $this->getBackingStore()->get('totalExpectedBytes');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalExpectedBytes'");
    }

    /**
     * Gets the totalExpectedObjects property value. The totalExpectedObjects property
     * @return int|null
    */
    public function getTotalExpectedObjects(): ?int {
        $val = $this->getBackingStore()->get('totalExpectedObjects');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalExpectedObjects'");
    }

    /**
     * Gets the totalRetryCount property value. The totalRetryCount property
     * @return int|null
    */
    public function getTotalRetryCount(): ?int {
        $val = $this->getBackingStore()->get('totalRetryCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalRetryCount'");
    }

    /**
     * Gets the totalWarnings property value. The totalWarnings property
     * @return int|null
    */
    public function getTotalWarnings(): ?int {
        $val = $this->getBackingStore()->get('totalWarnings');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'totalWarnings'");
    }

    /**
     * Gets the waitTimeOnSqlThrottlingMs property value. The waitTimeOnSqlThrottlingMs property
     * @return int|null
    */
    public function getWaitTimeOnSqlThrottlingMs(): ?int {
        $val = $this->getBackingStore()->get('waitTimeOnSqlThrottlingMs');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'waitTimeOnSqlThrottlingMs'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('bytesProcessed', $this->getBytesProcessed());
        $writer->writeIntegerValue('bytesProcessedOnlyCurrentVersion', $this->getBytesProcessedOnlyCurrentVersion());
        $writer->writeIntegerValue('cpuDurationMs', $this->getCpuDurationMs());
        $writer->writeIntegerValue('filesProcessed', $this->getFilesProcessed());
        $writer->writeIntegerValue('filesProcessedOnlyCurrentVersion', $this->getFilesProcessedOnlyCurrentVersion());
        $writer->writeBooleanValue('isCompleted', $this->getIsCompleted());
        $writer->writeStringValue('lastProcessedObjectId', $this->getLastProcessedObjectId());
        $writer->writeIntegerValue('objectsProcessed', $this->getObjectsProcessed());
        $writer->writeIntegerValue('sqlDurationMs', $this->getSqlDurationMs());
        $writer->writeIntegerValue('sqlQueryCount', $this->getSqlQueryCount());
        $writer->writeIntegerValue('totalDurationMs', $this->getTotalDurationMs());
        $writer->writeIntegerValue('totalErrors', $this->getTotalErrors());
        $writer->writeIntegerValue('totalExpectedBytes', $this->getTotalExpectedBytes());
        $writer->writeIntegerValue('totalExpectedObjects', $this->getTotalExpectedObjects());
        $writer->writeIntegerValue('totalRetryCount', $this->getTotalRetryCount());
        $writer->writeIntegerValue('totalWarnings', $this->getTotalWarnings());
        $writer->writeIntegerValue('waitTimeOnSqlThrottlingMs', $this->getWaitTimeOnSqlThrottlingMs());
    }

    /**
     * Sets the bytesProcessed property value. The bytesProcessed property
     * @param int|null $value Value to set for the bytesProcessed property.
    */
    public function setBytesProcessed(?int $value): void {
        $this->getBackingStore()->set('bytesProcessed', $value);
    }

    /**
     * Sets the bytesProcessedOnlyCurrentVersion property value. The bytesProcessedOnlyCurrentVersion property
     * @param int|null $value Value to set for the bytesProcessedOnlyCurrentVersion property.
    */
    public function setBytesProcessedOnlyCurrentVersion(?int $value): void {
        $this->getBackingStore()->set('bytesProcessedOnlyCurrentVersion', $value);
    }

    /**
     * Sets the cpuDurationMs property value. The cpuDurationMs property
     * @param int|null $value Value to set for the cpuDurationMs property.
    */
    public function setCpuDurationMs(?int $value): void {
        $this->getBackingStore()->set('cpuDurationMs', $value);
    }

    /**
     * Sets the filesProcessed property value. The filesProcessed property
     * @param int|null $value Value to set for the filesProcessed property.
    */
    public function setFilesProcessed(?int $value): void {
        $this->getBackingStore()->set('filesProcessed', $value);
    }

    /**
     * Sets the filesProcessedOnlyCurrentVersion property value. The filesProcessedOnlyCurrentVersion property
     * @param int|null $value Value to set for the filesProcessedOnlyCurrentVersion property.
    */
    public function setFilesProcessedOnlyCurrentVersion(?int $value): void {
        $this->getBackingStore()->set('filesProcessedOnlyCurrentVersion', $value);
    }

    /**
     * Sets the isCompleted property value. The isCompleted property
     * @param bool|null $value Value to set for the isCompleted property.
    */
    public function setIsCompleted(?bool $value): void {
        $this->getBackingStore()->set('isCompleted', $value);
    }

    /**
     * Sets the lastProcessedObjectId property value. The lastProcessedObjectId property
     * @param string|null $value Value to set for the lastProcessedObjectId property.
    */
    public function setLastProcessedObjectId(?string $value): void {
        $this->getBackingStore()->set('lastProcessedObjectId', $value);
    }

    /**
     * Sets the objectsProcessed property value. The objectsProcessed property
     * @param int|null $value Value to set for the objectsProcessed property.
    */
    public function setObjectsProcessed(?int $value): void {
        $this->getBackingStore()->set('objectsProcessed', $value);
    }

    /**
     * Sets the sqlDurationMs property value. The sqlDurationMs property
     * @param int|null $value Value to set for the sqlDurationMs property.
    */
    public function setSqlDurationMs(?int $value): void {
        $this->getBackingStore()->set('sqlDurationMs', $value);
    }

    /**
     * Sets the sqlQueryCount property value. The sqlQueryCount property
     * @param int|null $value Value to set for the sqlQueryCount property.
    */
    public function setSqlQueryCount(?int $value): void {
        $this->getBackingStore()->set('sqlQueryCount', $value);
    }

    /**
     * Sets the totalDurationMs property value. The totalDurationMs property
     * @param int|null $value Value to set for the totalDurationMs property.
    */
    public function setTotalDurationMs(?int $value): void {
        $this->getBackingStore()->set('totalDurationMs', $value);
    }

    /**
     * Sets the totalErrors property value. The totalErrors property
     * @param int|null $value Value to set for the totalErrors property.
    */
    public function setTotalErrors(?int $value): void {
        $this->getBackingStore()->set('totalErrors', $value);
    }

    /**
     * Sets the totalExpectedBytes property value. The totalExpectedBytes property
     * @param int|null $value Value to set for the totalExpectedBytes property.
    */
    public function setTotalExpectedBytes(?int $value): void {
        $this->getBackingStore()->set('totalExpectedBytes', $value);
    }

    /**
     * Sets the totalExpectedObjects property value. The totalExpectedObjects property
     * @param int|null $value Value to set for the totalExpectedObjects property.
    */
    public function setTotalExpectedObjects(?int $value): void {
        $this->getBackingStore()->set('totalExpectedObjects', $value);
    }

    /**
     * Sets the totalRetryCount property value. The totalRetryCount property
     * @param int|null $value Value to set for the totalRetryCount property.
    */
    public function setTotalRetryCount(?int $value): void {
        $this->getBackingStore()->set('totalRetryCount', $value);
    }

    /**
     * Sets the totalWarnings property value. The totalWarnings property
     * @param int|null $value Value to set for the totalWarnings property.
    */
    public function setTotalWarnings(?int $value): void {
        $this->getBackingStore()->set('totalWarnings', $value);
    }

    /**
     * Sets the waitTimeOnSqlThrottlingMs property value. The waitTimeOnSqlThrottlingMs property
     * @param int|null $value Value to set for the waitTimeOnSqlThrottlingMs property.
    */
    public function setWaitTimeOnSqlThrottlingMs(?int $value): void {
        $this->getBackingStore()->set('waitTimeOnSqlThrottlingMs', $value);
    }

}
