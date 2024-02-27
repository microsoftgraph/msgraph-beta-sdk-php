<?php

namespace Microsoft\Graph\Beta\Generated\Models\Networkaccess;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class RelatedProcess extends RelatedResource implements Parsable 
{
    /**
     * Instantiates a new RelatedProcess and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.networkaccess.relatedProcess');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return RelatedProcess
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): RelatedProcess {
        return new RelatedProcess();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'isSuspicious' => fn(ParseNode $n) => $o->setIsSuspicious($n->getBooleanValue()),
            'processName' => fn(ParseNode $n) => $o->setProcessName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the isSuspicious property value. The isSuspicious property
     * @return bool|null
    */
    public function getIsSuspicious(): ?bool {
        $val = $this->getBackingStore()->get('isSuspicious');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'isSuspicious'");
    }

    /**
     * Gets the processName property value. The processName property
     * @return string|null
    */
    public function getProcessName(): ?string {
        $val = $this->getBackingStore()->get('processName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processName'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('isSuspicious', $this->getIsSuspicious());
        $writer->writeStringValue('processName', $this->getProcessName());
    }

    /**
     * Sets the isSuspicious property value. The isSuspicious property
     * @param bool|null $value Value to set for the isSuspicious property.
    */
    public function setIsSuspicious(?bool $value): void {
        $this->getBackingStore()->set('isSuspicious', $value);
    }

    /**
     * Sets the processName property value. The processName property
     * @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value): void {
        $this->getBackingStore()->set('processName', $value);
    }

}
