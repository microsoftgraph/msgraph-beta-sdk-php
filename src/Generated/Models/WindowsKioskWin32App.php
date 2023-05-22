<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsKioskWin32App extends WindowsKioskAppBase implements Parsable 
{
    /**
     * Instantiates a new WindowsKioskWin32App and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.windowsKioskWin32App');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsKioskWin32App
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsKioskWin32App {
        return new WindowsKioskWin32App();
    }

    /**
     * Gets the classicAppPath property value. This is the classicapppath to be used by v4 Win32 app while in Kiosk Mode
     * @return string|null
    */
    public function getClassicAppPath(): ?string {
        return $this->getBackingStore()->get('classicAppPath');
    }

    /**
     * Gets the edgeKiosk property value. Edge kiosk (url) for Edge kiosk mode
     * @return string|null
    */
    public function getEdgeKiosk(): ?string {
        return $this->getBackingStore()->get('edgeKiosk');
    }

    /**
     * Gets the edgeKioskIdleTimeoutMinutes property value. Edge kiosk idle timeout in minutes for Edge kiosk mode. Valid values 0 to 1440
     * @return int|null
    */
    public function getEdgeKioskIdleTimeoutMinutes(): ?int {
        return $this->getBackingStore()->get('edgeKioskIdleTimeoutMinutes');
    }

    /**
     * Gets the edgeKioskType property value. Edge kiosk type
     * @return WindowsEdgeKioskType|null
    */
    public function getEdgeKioskType(): ?WindowsEdgeKioskType {
        return $this->getBackingStore()->get('edgeKioskType');
    }

    /**
     * Gets the edgeNoFirstRun property value. Edge first run flag for Edge kiosk mode
     * @return bool|null
    */
    public function getEdgeNoFirstRun(): ?bool {
        return $this->getBackingStore()->get('edgeNoFirstRun');
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'classicAppPath' => fn(ParseNode $n) => $o->setClassicAppPath($n->getStringValue()),
            'edgeKiosk' => fn(ParseNode $n) => $o->setEdgeKiosk($n->getStringValue()),
            'edgeKioskIdleTimeoutMinutes' => fn(ParseNode $n) => $o->setEdgeKioskIdleTimeoutMinutes($n->getIntegerValue()),
            'edgeKioskType' => fn(ParseNode $n) => $o->setEdgeKioskType($n->getEnumValue(WindowsEdgeKioskType::class)),
            'edgeNoFirstRun' => fn(ParseNode $n) => $o->setEdgeNoFirstRun($n->getBooleanValue()),
        ]);
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeStringValue('classicAppPath', $this->getClassicAppPath());
        $writer->writeStringValue('edgeKiosk', $this->getEdgeKiosk());
        $writer->writeIntegerValue('edgeKioskIdleTimeoutMinutes', $this->getEdgeKioskIdleTimeoutMinutes());
        $writer->writeEnumValue('edgeKioskType', $this->getEdgeKioskType());
        $writer->writeBooleanValue('edgeNoFirstRun', $this->getEdgeNoFirstRun());
    }

    /**
     * Sets the classicAppPath property value. This is the classicapppath to be used by v4 Win32 app while in Kiosk Mode
     * @param string|null $value Value to set for the classicAppPath property.
    */
    public function setClassicAppPath(?string $value): void {
        $this->getBackingStore()->set('classicAppPath', $value);
    }

    /**
     * Sets the edgeKiosk property value. Edge kiosk (url) for Edge kiosk mode
     * @param string|null $value Value to set for the edgeKiosk property.
    */
    public function setEdgeKiosk(?string $value): void {
        $this->getBackingStore()->set('edgeKiosk', $value);
    }

    /**
     * Sets the edgeKioskIdleTimeoutMinutes property value. Edge kiosk idle timeout in minutes for Edge kiosk mode. Valid values 0 to 1440
     * @param int|null $value Value to set for the edgeKioskIdleTimeoutMinutes property.
    */
    public function setEdgeKioskIdleTimeoutMinutes(?int $value): void {
        $this->getBackingStore()->set('edgeKioskIdleTimeoutMinutes', $value);
    }

    /**
     * Sets the edgeKioskType property value. Edge kiosk type
     * @param WindowsEdgeKioskType|null $value Value to set for the edgeKioskType property.
    */
    public function setEdgeKioskType(?WindowsEdgeKioskType $value): void {
        $this->getBackingStore()->set('edgeKioskType', $value);
    }

    /**
     * Sets the edgeNoFirstRun property value. Edge first run flag for Edge kiosk mode
     * @param bool|null $value Value to set for the edgeNoFirstRun property.
    */
    public function setEdgeNoFirstRun(?bool $value): void {
        $this->getBackingStore()->set('edgeNoFirstRun', $value);
    }

}
