<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

/**
 * A complex type to store process rule data for a Win32 LOB app.
*/
class Win32LobAppProcessRule extends Win32LobAppRule implements Parsable 
{
    /**
     * Instantiates a new Win32LobAppProcessRule and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.win32LobAppProcessRule');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return Win32LobAppProcessRule
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): Win32LobAppProcessRule {
        return new Win32LobAppProcessRule();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'operationType' => fn(ParseNode $n) => $o->setOperationType($n->getEnumValue(Win32LobAppProcessOperationType::class)),
            'processDisplayName' => fn(ParseNode $n) => $o->setProcessDisplayName($n->getStringValue()),
            'processName' => fn(ParseNode $n) => $o->setProcessName($n->getStringValue()),
        ]);
    }

    /**
     * Gets the operationType property value. A list of possible operations for rules used to make determinations about whether an application is in-use based on process state.
     * @return Win32LobAppProcessOperationType|null
    */
    public function getOperationType(): ?Win32LobAppProcessOperationType {
        $val = $this->getBackingStore()->get('operationType');
        if (is_null($val) || $val instanceof Win32LobAppProcessOperationType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'operationType'");
    }

    /**
     * Gets the processDisplayName property value. Indicates the display name for the process in the Intune admin console. Example: `Microsoft Word`.
     * @return string|null
    */
    public function getProcessDisplayName(): ?string {
        $val = $this->getBackingStore()->get('processDisplayName');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'processDisplayName'");
    }

    /**
     * Gets the processName property value. Indicates the process name to be searched for on a managed device when enforcing a managed app. Example: `TestApp.exe`.
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
        $writer->writeEnumValue('operationType', $this->getOperationType());
        $writer->writeStringValue('processDisplayName', $this->getProcessDisplayName());
        $writer->writeStringValue('processName', $this->getProcessName());
    }

    /**
     * Sets the operationType property value. A list of possible operations for rules used to make determinations about whether an application is in-use based on process state.
     * @param Win32LobAppProcessOperationType|null $value Value to set for the operationType property.
    */
    public function setOperationType(?Win32LobAppProcessOperationType $value): void {
        $this->getBackingStore()->set('operationType', $value);
    }

    /**
     * Sets the processDisplayName property value. Indicates the display name for the process in the Intune admin console. Example: `Microsoft Word`.
     * @param string|null $value Value to set for the processDisplayName property.
    */
    public function setProcessDisplayName(?string $value): void {
        $this->getBackingStore()->set('processDisplayName', $value);
    }

    /**
     * Sets the processName property value. Indicates the process name to be searched for on a managed device when enforcing a managed app. Example: `TestApp.exe`.
     * @param string|null $value Value to set for the processName property.
    */
    public function setProcessName(?string $value): void {
        $this->getBackingStore()->set('processName', $value);
    }

}
