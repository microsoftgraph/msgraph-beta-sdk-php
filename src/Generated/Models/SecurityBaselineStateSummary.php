<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * The security baseline compliance state summary for the security baseline of the account.
*/
class SecurityBaselineStateSummary extends Entity implements Parsable 
{
    /**
     * Instantiates a new SecurityBaselineStateSummary and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return SecurityBaselineStateSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): SecurityBaselineStateSummary {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.securityBaselineCategoryStateSummary': return new SecurityBaselineCategoryStateSummary();
            }
        }
        return new SecurityBaselineStateSummary();
    }

    /**
     * Gets the conflictCount property value. Number of conflict devices
     * @return int|null
    */
    public function getConflictCount(): ?int {
        $val = $this->getBackingStore()->get('conflictCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'conflictCount'");
    }

    /**
     * Gets the errorCount property value. Number of error devices
     * @return int|null
    */
    public function getErrorCount(): ?int {
        $val = $this->getBackingStore()->get('errorCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'errorCount'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'conflictCount' => fn(ParseNode $n) => $o->setConflictCount($n->getIntegerValue()),
            'errorCount' => fn(ParseNode $n) => $o->setErrorCount($n->getIntegerValue()),
            'notApplicableCount' => fn(ParseNode $n) => $o->setNotApplicableCount($n->getIntegerValue()),
            'notSecureCount' => fn(ParseNode $n) => $o->setNotSecureCount($n->getIntegerValue()),
            'secureCount' => fn(ParseNode $n) => $o->setSecureCount($n->getIntegerValue()),
            'unknownCount' => fn(ParseNode $n) => $o->setUnknownCount($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the notApplicableCount property value. Number of not applicable devices
     * @return int|null
    */
    public function getNotApplicableCount(): ?int {
        $val = $this->getBackingStore()->get('notApplicableCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notApplicableCount'");
    }

    /**
     * Gets the notSecureCount property value. Number of not secure devices
     * @return int|null
    */
    public function getNotSecureCount(): ?int {
        $val = $this->getBackingStore()->get('notSecureCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'notSecureCount'");
    }

    /**
     * Gets the secureCount property value. Number of secure devices
     * @return int|null
    */
    public function getSecureCount(): ?int {
        $val = $this->getBackingStore()->get('secureCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'secureCount'");
    }

    /**
     * Gets the unknownCount property value. Number of unknown devices
     * @return int|null
    */
    public function getUnknownCount(): ?int {
        $val = $this->getBackingStore()->get('unknownCount');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'unknownCount'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('conflictCount', $this->getConflictCount());
        $writer->writeIntegerValue('errorCount', $this->getErrorCount());
        $writer->writeIntegerValue('notApplicableCount', $this->getNotApplicableCount());
        $writer->writeIntegerValue('notSecureCount', $this->getNotSecureCount());
        $writer->writeIntegerValue('secureCount', $this->getSecureCount());
        $writer->writeIntegerValue('unknownCount', $this->getUnknownCount());
    }

    /**
     * Sets the conflictCount property value. Number of conflict devices
     * @param int|null $value Value to set for the conflictCount property.
    */
    public function setConflictCount(?int $value): void {
        $this->getBackingStore()->set('conflictCount', $value);
    }

    /**
     * Sets the errorCount property value. Number of error devices
     * @param int|null $value Value to set for the errorCount property.
    */
    public function setErrorCount(?int $value): void {
        $this->getBackingStore()->set('errorCount', $value);
    }

    /**
     * Sets the notApplicableCount property value. Number of not applicable devices
     * @param int|null $value Value to set for the notApplicableCount property.
    */
    public function setNotApplicableCount(?int $value): void {
        $this->getBackingStore()->set('notApplicableCount', $value);
    }

    /**
     * Sets the notSecureCount property value. Number of not secure devices
     * @param int|null $value Value to set for the notSecureCount property.
    */
    public function setNotSecureCount(?int $value): void {
        $this->getBackingStore()->set('notSecureCount', $value);
    }

    /**
     * Sets the secureCount property value. Number of secure devices
     * @param int|null $value Value to set for the secureCount property.
    */
    public function setSecureCount(?int $value): void {
        $this->getBackingStore()->set('secureCount', $value);
    }

    /**
     * Sets the unknownCount property value. Number of unknown devices
     * @param int|null $value Value to set for the unknownCount property.
    */
    public function setUnknownCount(?int $value): void {
        $this->getBackingStore()->set('unknownCount', $value);
    }

}
