
/*
 *    MCreator note: This file will be REGENERATED on each build.
 */
package net.poluxserver.init;

import net.poluxserver.item.RickRollItem;
import net.poluxserver.item.PoluxiteSwordItem;
import net.poluxserver.item.PoluxiteShovelItem;
import net.poluxserver.item.PoluxitePickaxeItem;
import net.poluxserver.item.PoluxiteHoeItem;
import net.poluxserver.item.PoluxiteDustItem;
import net.poluxserver.item.PoluxiteAxeItem;
import net.poluxserver.item.PoluxiteArmorItem;
import net.poluxserver.PoluxserverMod;

import net.minecraftforge.registries.RegistryObject;
import net.minecraftforge.registries.ForgeRegistries;
import net.minecraftforge.registries.DeferredRegister;

import net.minecraft.world.level.block.Block;
import net.minecraft.world.item.Item;
import net.minecraft.world.item.BlockItem;

public class PoluxserverModItems {
	public static final DeferredRegister<Item> REGISTRY = DeferredRegister.create(ForgeRegistries.ITEMS, PoluxserverMod.MODID);
	public static final RegistryObject<Item> METRO_WALL_BLOCK = block(PoluxserverModBlocks.METRO_WALL_BLOCK);
	public static final RegistryObject<Item> BITUMEN_BLOCK = block(PoluxserverModBlocks.BITUMEN_BLOCK);
	public static final RegistryObject<Item> BALLAST = block(PoluxserverModBlocks.BALLAST);
	public static final RegistryObject<Item> RICK_ROLL = REGISTRY.register("rick_roll", () -> new RickRollItem());
	public static final RegistryObject<Item> POLUXITE_ORE = block(PoluxserverModBlocks.POLUXITE_ORE);
	public static final RegistryObject<Item> POLUXITE_BLOCK = block(PoluxserverModBlocks.POLUXITE_BLOCK);
	public static final RegistryObject<Item> POLUXITE_DUST = REGISTRY.register("poluxite_dust", () -> new PoluxiteDustItem());
	public static final RegistryObject<Item> POLUXITE_AXE = REGISTRY.register("poluxite_axe", () -> new PoluxiteAxeItem());
	public static final RegistryObject<Item> POLUXITE_PICKAXE = REGISTRY.register("poluxite_pickaxe", () -> new PoluxitePickaxeItem());
	public static final RegistryObject<Item> POLUXITE_SWORD = REGISTRY.register("poluxite_sword", () -> new PoluxiteSwordItem());
	public static final RegistryObject<Item> POLUXITE_SHOVEL = REGISTRY.register("poluxite_shovel", () -> new PoluxiteShovelItem());
	public static final RegistryObject<Item> POLUXITE_HOE = REGISTRY.register("poluxite_hoe", () -> new PoluxiteHoeItem());
	public static final RegistryObject<Item> POLUXITE_ARMOR_HELMET = REGISTRY.register("poluxite_armor_helmet", () -> new PoluxiteArmorItem.Helmet());
	public static final RegistryObject<Item> POLUXITE_ARMOR_CHESTPLATE = REGISTRY.register("poluxite_armor_chestplate", () -> new PoluxiteArmorItem.Chestplate());
	public static final RegistryObject<Item> POLUXITE_ARMOR_LEGGINGS = REGISTRY.register("poluxite_armor_leggings", () -> new PoluxiteArmorItem.Leggings());
	public static final RegistryObject<Item> POLUXITE_ARMOR_BOOTS = REGISTRY.register("poluxite_armor_boots", () -> new PoluxiteArmorItem.Boots());

	private static RegistryObject<Item> block(RegistryObject<Block> block) {
		return REGISTRY.register(block.getId().getPath(), () -> new BlockItem(block.get(), new Item.Properties()));
	}
}
