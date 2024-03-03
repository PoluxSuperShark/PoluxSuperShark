
/*
 *    MCreator note: This file will be REGENERATED on each build.
 */
package net.poluxserver.init;

import net.minecraftforge.fml.common.Mod;
import net.minecraftforge.eventbus.api.SubscribeEvent;
import net.minecraftforge.event.CreativeModeTabEvent;

import net.minecraft.world.item.ItemStack;
import net.minecraft.world.item.CreativeModeTabs;
import net.minecraft.resources.ResourceLocation;
import net.minecraft.network.chat.Component;

@Mod.EventBusSubscriber(bus = Mod.EventBusSubscriber.Bus.MOD)
public class PoluxserverModTabs {
	@SubscribeEvent
	public static void buildTabContentsVanilla(CreativeModeTabEvent.BuildContents tabData) {

		if (tabData.getTab() == CreativeModeTabs.BUILDING_BLOCKS) {
			tabData.accept(PoluxserverModBlocks.METRO_WALL_BLOCK.get().asItem());
			tabData.accept(PoluxserverModBlocks.BITUMEN_BLOCK.get().asItem());
			tabData.accept(PoluxserverModBlocks.POLUXITE_ORE.get().asItem());
			tabData.accept(PoluxserverModBlocks.POLUXITE_BLOCK.get().asItem());
		}

		if (tabData.getTab() == CreativeModeTabs.COMBAT) {
			tabData.accept(PoluxserverModItems.POLUXITE_SWORD.get());
			tabData.accept(PoluxserverModItems.POLUXITE_ARMOR_HELMET.get());
			tabData.accept(PoluxserverModItems.POLUXITE_ARMOR_CHESTPLATE.get());
			tabData.accept(PoluxserverModItems.POLUXITE_ARMOR_LEGGINGS.get());
			tabData.accept(PoluxserverModItems.POLUXITE_ARMOR_BOOTS.get());
		}

		if (tabData.getTab() == CreativeModeTabs.INGREDIENTS) {
			tabData.accept(PoluxserverModItems.POLUXITE_DUST.get());
		}

		if (tabData.getTab() == CreativeModeTabs.TOOLS_AND_UTILITIES) {
			tabData.accept(PoluxserverModItems.RICK_ROLL.get());
			tabData.accept(PoluxserverModItems.POLUXITE_AXE.get());
			tabData.accept(PoluxserverModItems.POLUXITE_PICKAXE.get());
			tabData.accept(PoluxserverModItems.POLUXITE_SHOVEL.get());
			tabData.accept(PoluxserverModItems.POLUXITE_HOE.get());
		}
	}

	@SubscribeEvent
	public static void buildTabContentsModded(CreativeModeTabEvent.Register event) {
		event.registerCreativeModeTab(new ResourceLocation("poluxserver", "metro"),
				builder -> builder.title(Component.translatable("item_group.poluxserver.metro")).icon(() -> new ItemStack(PoluxserverModBlocks.METRO_WALL_BLOCK.get())).displayItems((parameters, tabData) -> {
					tabData.accept(PoluxserverModBlocks.BALLAST.get().asItem());
				}).withSearchBar());
	}
}
